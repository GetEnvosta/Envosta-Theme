<?php
/**
 * Additional block styles shipped with Envosta.
 *
 * Currently registers:
 *   - "Grainy"  on core/group and core/cover — adds a subtle SVG noise
 *               texture over the block's background. Composes with any
 *               background color, image, or gradient already set.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_register_extra_block_styles' ) ) :
	function envosta_register_extra_block_styles() {
		$grainy = array(
			'name'  => 'grainy',
			'label' => __( 'Grainy', 'envosta' ),
		);
		register_block_style( 'core/group', $grainy );
		register_block_style( 'core/cover', $grainy );
		register_block_style( 'core/column', $grainy );
	}
endif;
add_action( 'init', 'envosta_register_extra_block_styles' );

/**
 * Enqueue the small scroll-state script that powers
 * .envosta-sticky / .envosta-opaque-on-scroll / .envosta-hide-on-scroll-down.
 */
if ( ! function_exists( 'envosta_enqueue_scroll_effects' ) ) :
	function envosta_enqueue_scroll_effects() {
		wp_enqueue_script(
			'envosta-scroll-effects',
			get_template_directory_uri() . '/assets/js/scroll-effects.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			array( 'in_footer' => true, 'strategy' => 'defer' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'envosta_enqueue_scroll_effects' );
