/**
 * Envosta — Scroll-state body classes.
 *
 * Watches the window scroll and toggles two classes on <body>:
 *
 *   .is-scrolled         — set whenever scrollY > 0
 *   .is-scrolling-down   — set when the user is scrolling toward the
 *                           bottom (cleared on the next upward scroll)
 *
 * Utility classes the author can add to any block via "Additional
 * CSS class" key off these body classes:
 *
 *   .envosta-sticky               position: sticky; top: 0;
 *   .envosta-opaque-on-scroll     transparent at top, gains a
 *                                 background + blur once scrolled
 *   .envosta-hide-on-scroll-down  slides up out of view when the
 *                                 user scrolls down; reappears on up
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var SCROLL_TOP_THRESHOLD       = 4;   // px past which is-scrolled engages
	var SCROLL_DIRECTION_THRESHOLD = 8;   // px movement before flipping direction

	var lastY = window.pageYOffset || document.documentElement.scrollTop || 0;
	var ticking = false;

	function update() {
		var y    = window.pageYOffset || document.documentElement.scrollTop || 0;
		var body = document.body;

		if ( y > SCROLL_TOP_THRESHOLD ) {
			body.classList.add( 'is-scrolled' );
		} else {
			body.classList.remove( 'is-scrolled' );
			body.classList.remove( 'is-scrolling-down' );
		}

		if ( Math.abs( y - lastY ) > SCROLL_DIRECTION_THRESHOLD ) {
			if ( y > lastY && y > SCROLL_TOP_THRESHOLD ) {
				body.classList.add( 'is-scrolling-down' );
			} else {
				body.classList.remove( 'is-scrolling-down' );
			}
			lastY = y;
		}

		ticking = false;
	}

	window.addEventListener( 'scroll', function () {
		if ( ! ticking ) {
			window.requestAnimationFrame( update );
			ticking = true;
		}
	}, { passive: true } );

	// Set initial state on first paint.
	update();

} )();
