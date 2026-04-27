<?php
/**
 * Pattern categories for the Envosta theme.
 *
 * Adds a single "Blog" bucket — for everything else we lean on the
 * core categories WordPress ships (header, footer, banner, featured,
 * call-to-action, gallery, posts, text…) and WooCommerce's own
 * "WooCommerce" category when WC is active.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_register_pattern_categories' ) ) :
	function envosta_register_pattern_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) return;

		register_block_pattern_category( 'blog', array(
			'label'       => __( 'Blog', 'envosta' ),
			'description' => __( 'Post layouts, archives, and editorial content.', 'envosta' ),
		) );
	}
endif;
add_action( 'init', 'envosta_register_pattern_categories', 9 );
