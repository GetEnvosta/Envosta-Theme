<?php
/**
 * WooCommerce integration for the Envosta theme.
 *
 * Loaded only when WooCommerce is active (guarded in functions.php).
 * Declares theme supports, renders the cart drawer, keeps the cart
 * count bubble fresh via fragments, and ships Shopify-style UX touches.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Declare WooCommerce theme support and enable all product gallery features.
 */
if ( ! function_exists( 'envosta_woocommerce_setup' ) ) :
	function envosta_woocommerce_setup() {
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 720,
			'single_image_width'    => 1200,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 2,
				'max_columns'     => 6,
			),
		) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
endif;
add_action( 'after_setup_theme', 'envosta_woocommerce_setup' );

/**
 * Body class marker so CSS and JS can target Woo-active pages precisely.
 */
if ( ! function_exists( 'envosta_woocommerce_body_class' ) ) :
	function envosta_woocommerce_body_class( $classes ) {
		$classes[] = 'envosta-has-woocommerce';
		return $classes;
	}
endif;
add_filter( 'body_class', 'envosta_woocommerce_body_class' );

/**
 * Render the Shopify-style cart drawer into the page footer.
 * Opens via any element with data-envosta-cart-open.
 * Closes via data-envosta-cart-close, the backdrop, or Escape.
 */
if ( ! function_exists( 'envosta_render_cart_drawer' ) ) :
	function envosta_render_cart_drawer() {
		if ( is_admin() || ! function_exists( 'WC' ) ) return;
		?>
		<aside
			class="envosta-cart-drawer"
			id="envosta-cart-drawer"
			aria-hidden="true"
			aria-labelledby="envosta-cart-title"
		>
			<div class="envosta-cart-drawer__backdrop" data-envosta-cart-close></div>
			<div class="envosta-cart-drawer__panel" role="dialog" aria-modal="true">
				<header class="envosta-cart-drawer__header">
					<h2 class="envosta-cart-drawer__title" id="envosta-cart-title">
						<?php esc_html_e( 'Your cart', 'envosta' ); ?>
					</h2>
					<button
						type="button"
						class="envosta-cart-drawer__close"
						data-envosta-cart-close
						aria-label="<?php esc_attr_e( 'Close cart', 'envosta' ); ?>"
					>&times;</button>
				</header>
				<div class="envosta-cart-drawer__body">
					<?php echo do_shortcode( '[woocommerce_mini_cart]' ); ?>
				</div>
			</div>
		</aside>
		<?php
	}
endif;
add_action( 'wp_footer', 'envosta_render_cart_drawer', 50 );

/**
 * Refresh the drawer contents and the header cart-count bubble
 * when products are added/removed via AJAX.
 */
if ( ! function_exists( 'envosta_cart_fragments' ) ) :
	function envosta_cart_fragments( $fragments ) {
		ob_start();
		woocommerce_mini_cart();
		$fragments['.widget_shopping_cart_content'] =
			'<div class="widget_shopping_cart_content">' . ob_get_clean() . '</div>';

		$count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
		$fragments['.envosta-cart-count'] =
			'<span class="envosta-cart-count" data-envosta-cart-count>' . (int) $count . '</span>';

		return $fragments;
	}
endif;
add_filter( 'woocommerce_add_to_cart_fragments', 'envosta_cart_fragments' );

/**
 * Auto-open the cart drawer on add-to-cart. The JS listens for this
 * via a body data attribute.
 */
if ( ! function_exists( 'envosta_auto_open_cart_on_add' ) ) :
	function envosta_auto_open_cart_on_add() {
		if ( ! is_singular( 'product' ) && ! is_shop() && ! is_product_category() && ! is_product_tag() ) return;
		?>
		<script>
			document.addEventListener( 'DOMContentLoaded', function () {
				if ( typeof jQuery === 'undefined' ) return;
				jQuery( document.body ).on( 'added_to_cart', function () {
					var drawer = document.getElementById( 'envosta-cart-drawer' );
					if ( drawer ) drawer.classList.add( 'is-open' );
				} );
			} );
		</script>
		<?php
	}
endif;
add_action( 'wp_footer', 'envosta_auto_open_cart_on_add', 60 );

/**
 * Shopify-style "Sale" badge (pill, not flag).
 */
if ( ! function_exists( 'envosta_sale_flash' ) ) :
	function envosta_sale_flash() {
		return '<span class="envosta-sale-badge">' . esc_html__( 'Sale', 'envosta' ) . '</span>';
	}
endif;
add_filter( 'woocommerce_sale_flash', 'envosta_sale_flash' );

/**
 * Editorial account menu labels.
 */
if ( ! function_exists( 'envosta_account_menu_items' ) ) :
	function envosta_account_menu_items( $items ) {
		$renamed = array(
			'dashboard'       => __( 'Overview', 'envosta' ),
			'orders'          => __( 'Orders', 'envosta' ),
			'downloads'       => __( 'Downloads', 'envosta' ),
			'edit-address'    => __( 'Addresses', 'envosta' ),
			'edit-account'    => __( 'Account', 'envosta' ),
			'customer-logout' => __( 'Sign out', 'envosta' ),
		);
		foreach ( $renamed as $key => $label ) {
			if ( isset( $items[ $key ] ) ) $items[ $key ] = $label;
		}
		return $items;
	}
endif;
add_filter( 'woocommerce_account_menu_items', 'envosta_account_menu_items' );

/**
 * Slim breadcrumbs.
 */
if ( ! function_exists( 'envosta_breadcrumb_defaults' ) ) :
	function envosta_breadcrumb_defaults( $defaults ) {
		$defaults['delimiter']   = '<span class="envosta-crumb-sep" aria-hidden="true"> / </span>';
		$defaults['wrap_before'] = '<nav class="woocommerce-breadcrumb envosta-breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'envosta' ) . '">';
		$defaults['wrap_after']  = '</nav>';
		return $defaults;
	}
endif;
add_filter( 'woocommerce_breadcrumb_defaults', 'envosta_breadcrumb_defaults' );

/**
 * Inline JS for the cart drawer open/close interactions. Kept tiny
 * and dependency-free so the Shopify cart experience works the
 * moment WooCommerce is activated — no config required.
 */
if ( ! function_exists( 'envosta_cart_drawer_js' ) ) :
	function envosta_cart_drawer_js() {
		?>
		<script>
		( function () {
			var drawer = document.getElementById( 'envosta-cart-drawer' );
			if ( ! drawer ) return;

			function openCart( e ) {
				if ( e ) e.preventDefault();
				drawer.classList.add( 'is-open' );
				drawer.setAttribute( 'aria-hidden', 'false' );
				document.body.classList.add( 'envosta-cart-open' );
			}
			function closeCart() {
				drawer.classList.remove( 'is-open' );
				drawer.setAttribute( 'aria-hidden', 'true' );
				document.body.classList.remove( 'envosta-cart-open' );
			}

			document.addEventListener( 'click', function ( e ) {
				var open  = e.target.closest( '[data-envosta-cart-open]' );
				var close = e.target.closest( '[data-envosta-cart-close]' );
				if ( open )  openCart( e );
				if ( close ) closeCart();
			} );
			document.addEventListener( 'keydown', function ( e ) {
				if ( e.key === 'Escape' && drawer.classList.contains( 'is-open' ) ) closeCart();
			} );
		} )();
		</script>
		<?php
	}
endif;
add_action( 'wp_footer', 'envosta_cart_drawer_js', 70 );
