/**
 * Envosta — Mobile menu drawer (template-part backed).
 *
 * Companion to inc/mobile-menu.php. Wires up:
 *
 *   • Click on [data-envosta-mobile-menu-open] → open the drawer.
 *     The trigger may set data-direction="push|slide-over|slide-down"
 *     to override the default direction for that opening.
 *   • Click on [data-envosta-mobile-menu-close] (close button or backdrop)
 *     → animate out, then hide.
 *   • Escape key → close.
 *   • Focus is moved to the close button on open and returned to the
 *     trigger on close.
 *   • Body gets `envosta-mobile-menu-open` while the drawer is visible
 *     so CSS can lock scroll.
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var DIRECTIONS = [ 'push', 'slide-over', 'slide-down' ];
	var SAFETY_MS  = 400;

	function getDrawer() {
		return document.querySelector( '[data-envosta-mobile-menu-drawer]' );
	}

	function setDirection( drawer, direction ) {
		if ( ! direction || DIRECTIONS.indexOf( direction ) === -1 ) return;
		DIRECTIONS.forEach( function ( d ) {
			drawer.classList.remove( 'is-style-' + d );
		} );
		drawer.classList.add( 'is-style-' + direction );
	}

	var lastTrigger = null;

	function openDrawer( trigger ) {
		var drawer = getDrawer();
		if ( ! drawer ) return;

		lastTrigger = trigger || null;

		var dir = trigger && trigger.getAttribute( 'data-direction' );
		setDirection( drawer, dir );

		drawer.hidden = false;
		// Force layout flush so the entry animation runs.
		// eslint-disable-next-line no-unused-expressions
		drawer.offsetHeight;

		drawer.classList.remove( 'envosta-closing' );
		drawer.classList.add( 'is-open' );
		drawer.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'envosta-mobile-menu-open' );

		// Push variant: slide the page canvas out.
		if ( drawer.classList.contains( 'is-style-push' ) ) {
			document.body.classList.add( 'envosta-mobile-menu-push-active' );
		}

		var closeBtn = drawer.querySelector( '.envosta-mobile-menu-drawer__close' );
		if ( closeBtn ) {
			try { closeBtn.focus( { preventScroll: true } ); } catch ( e ) { closeBtn.focus(); }
		}
	}

	function closeDrawer() {
		var drawer = getDrawer();
		if ( ! drawer || ! drawer.classList.contains( 'is-open' ) ) return;

		var panel = drawer.querySelector( '.envosta-mobile-menu-drawer__panel' );
		var done  = false;

		function finish() {
			if ( done ) return;
			done = true;
			drawer.classList.remove( 'is-open', 'envosta-closing' );
			drawer.setAttribute( 'aria-hidden', 'true' );
			drawer.hidden = true;
			document.body.classList.remove( 'envosta-mobile-menu-open' );

			if ( lastTrigger && typeof lastTrigger.focus === 'function' ) {
				try { lastTrigger.focus( { preventScroll: true } ); } catch ( e ) { lastTrigger.focus(); }
			}
			lastTrigger = null;
		}

		// Trigger canvas slide-back BEFORE the panel exit animation starts
		// so both run together smoothly.
		document.body.classList.remove( 'envosta-mobile-menu-push-active' );

		drawer.classList.add( 'envosta-closing' );

		if ( panel ) {
			panel.addEventListener( 'animationend', finish, { once: true } );
		}
		// Safety net for reduced-motion / interrupted animations.
		setTimeout( finish, SAFETY_MS );
	}

	/* -- Events -------------------------------------------------------- */

	document.addEventListener( 'click', function ( event ) {
		var openTrigger = event.target.closest( '[data-envosta-mobile-menu-open]' );
		if ( openTrigger ) {
			event.preventDefault();
			openDrawer( openTrigger );
			return;
		}

		var closeTrigger = event.target.closest( '[data-envosta-mobile-menu-close]' );
		if ( closeTrigger ) {
			event.preventDefault();
			closeDrawer();
		}
	}, false );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key !== 'Escape' && event.key !== 'Esc' ) return;
		var drawer = getDrawer();
		if ( ! drawer || ! drawer.classList.contains( 'is-open' ) ) return;
		closeDrawer();
	} );

} )();
