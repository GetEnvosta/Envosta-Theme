<?php
/**
 * Server-side visibility utility classes.
 *
 * Pure-CSS can't read auth state, so we filter blocks at render time
 * and return empty when the author has tagged a block to hide for
 * the current user's logged-in / logged-out status.
 *
 *   .hide-logged-in   — block is removed entirely for authenticated users
 *   .hide-logged-out  — block is removed entirely for guest users
 *
 * Drop into any block via "Advanced → Additional CSS class" in the
 * editor. Mirrors the responsive .hide-mobile / .hide-tablet /
 * .hide-desktop classes that live in style.css.
 *
 * NOTE: Page caching plugins (W3 Total Cache, WP Rocket, etc.) cache
 * the rendered HTML and will not vary by auth state unless configured
 * to. If you use these utilities on a cached site, exclude pages that
 * use them or enable "logged-in user cache splitting" in the plugin.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_filter_visibility_blocks' ) ) :
	function envosta_filter_visibility_blocks( $content, $block ) {
		if ( ! is_string( $content ) || '' === $content ) {
			return $content;
		}

		// Cheap early-out: skip the regex/attr lookup unless one of our
		// classes is even present in the rendered HTML.
		if (
			false === strpos( $content, 'hide-logged-in' ) &&
			false === strpos( $content, 'hide-logged-out' )
		) {
			return $content;
		}

		$classes = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
		if ( '' === $classes ) {
			return $content;
		}

		$tokens = preg_split( '/\s+/', $classes );

		if ( in_array( 'hide-logged-in', $tokens, true ) && is_user_logged_in() ) {
			return '';
		}
		if ( in_array( 'hide-logged-out', $tokens, true ) && ! is_user_logged_in() ) {
			return '';
		}

		return $content;
	}
endif;
add_filter( 'render_block', 'envosta_filter_visibility_blocks', 10, 2 );
