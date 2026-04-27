/**
 * Envosta — Mobile menu interaction polish.
 *
 * Adds two behaviors on top of the three Envosta mobile menu block
 * styles registered on core/navigation
 * (is-style-push / is-style-slide-over / is-style-slide-down):
 *
 *   1. Tap the backdrop to close the menu.
 *   2. Animate the panel out before WordPress hides it.
 *
 * Implementation notes
 *
 *   • WordPress's responsive overlay flips `.is-menu-open` and
 *     `.has-modal-open` on the same tick, so there's no "closing" state
 *     in core. We add a transient `envosta-closing` class, let CSS run
 *     a reverse @keyframes, then forward the click to the real close
 *     button after `animationend`.
 *
 *   • Capture-phase listener so we can intercept the close button
 *     before WP's bound handler fires.
 *
 *   • Escape and the spec'd Esc-to-close path inside WP's interactivity
 *     API still close instantly without animation. That's intentional —
 *     intercepting Esc cleanly on every WP version is more brittle than
 *     it's worth.
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var ENVOSTA_NAV_SEL = [
		'.wp-block-navigation.is-style-push',
		'.wp-block-navigation.is-style-slide-over',
		'.wp-block-navigation.is-style-slide-down'
	].join( ', ' );

	var SAFETY_MS = 400;

	/**
	 * 0. Canvas push: when an is-style-push nav opens, mark the body so
	 *    its non-drawer children translate out via CSS. Mirrors the
	 *    drawer-system behavior.
	 */
	function watchPushOpen() {
		// MutationObserver on each push container: toggle body class as
		// .is-menu-open is added/removed.
		var pushContainers = document.querySelectorAll( '.wp-block-navigation.is-style-push .wp-block-navigation__responsive-container' );
		pushContainers.forEach( function ( container ) {
			var observer = new MutationObserver( function () {
				var open = container.classList.contains( 'is-menu-open' );
				var closing = container.classList.contains( 'envosta-closing' );
				if ( open && ! closing ) {
					document.body.classList.add( 'envosta-mobile-menu-push-active' );
				} else if ( closing || ! open ) {
					document.body.classList.remove( 'envosta-mobile-menu-push-active' );
				}
			} );
			observer.observe( container, { attributes: true, attributeFilter: [ 'class' ] } );
		} );
	}
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', watchPushOpen );
	} else {
		watchPushOpen();
	}

	/**
	 * 1. Tap-outside-to-close
	 * Listen on document; if the click was inside an open Envosta menu's
	 * responsive container but NOT inside the panel content, close it.
	 */
	document.addEventListener( 'click', function ( event ) {
		var container = event.target.closest( '.wp-block-navigation__responsive-container.is-menu-open' );
		if ( ! container ) return;
		if ( ! container.closest( ENVOSTA_NAV_SEL ) ) return;

		var content = container.querySelector( '.wp-block-navigation__responsive-container-content' );
		if ( ! content ) return;
		if ( content.contains( event.target ) ) return; // Click was inside the panel — leave alone.

		var closeBtn = container.querySelector( '.wp-block-navigation__responsive-container-close' );
		if ( closeBtn ) closeBtn.click();
	}, false );

	/**
	 * 2. Close animation
	 * Capture the close click, swap to a closing state, wait for the
	 * exit animation to finish, then re-fire the click so WP's own
	 * handler removes `.is-menu-open` and the menu actually closes.
	 */
	document.addEventListener( 'click', function ( event ) {
		var closeBtn = event.target.closest( '.wp-block-navigation__responsive-container-close' );
		if ( ! closeBtn ) return;

		var container = closeBtn.closest( '.wp-block-navigation__responsive-container.is-menu-open' );
		if ( ! container ) return;
		if ( ! container.closest( ENVOSTA_NAV_SEL ) ) return;

		// We re-fire the same click after animation; this flag tells the
		// second pass to skip our handler.
		if ( container.dataset.envostaForwarding === '1' ) {
			container.dataset.envostaForwarding = '';
			return;
		}

		event.preventDefault();
		event.stopImmediatePropagation();

		var content = container.querySelector( '.wp-block-navigation__responsive-container-content' );
		if ( ! content ) {
			closeBtn.click();
			return;
		}

		container.classList.add( 'envosta-closing' );

		var done = false;
		function finish() {
			if ( done ) return;
			done = true;
			container.classList.remove( 'envosta-closing' );
			container.dataset.envostaForwarding = '1';
			closeBtn.click();
		}

		content.addEventListener( 'animationend', finish, { once: true } );
		// Safety net in case animationend doesn't fire (reduced motion,
		// blur, etc.) — never leave the menu stuck in a closing state.
		setTimeout( finish, SAFETY_MS );
	}, true ); // capture phase to beat WP's bound handler

} )();
