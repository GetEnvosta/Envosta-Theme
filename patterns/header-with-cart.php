<?php
/**
 * Title: Header with Cart
 * Slug: envosta/header-with-cart
 * Categories: woocommerce, header
 * Block Types: core/template-part/header
 * Description: Site header with logo, navigation, search icon, and a cart trigger that opens the Envosta cart drawer. Ideal for any Envosta site running WooCommerce.
 *
 * @package Envosta
 */
declare( strict_types = 1 );

// Resolve the current cart count at render so the bubble is accurate on first paint.
$envosta_cart_count = 0;
if ( function_exists( 'WC' ) && WC() && WC()->cart ) {
	$envosta_cart_count = WC()->cart->get_cart_contents_count();
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:site-title {"level":0} /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-group">

			<!-- wp:navigation {"className":"is-style-slide-over","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} /-->

			<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search","buttonText":"","buttonPosition":"button-only","buttonUseIcon":true} /-->

			<!-- wp:html -->
			<a href="#envosta-cart-drawer" class="envosta-cart-trigger" data-envosta-cart-open aria-label="<?php esc_attr_e( 'Open cart', 'envosta' ); ?>">
				<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
					<path d="M3 6h18"/>
					<path d="M16 10a4 4 0 0 1-8 0"/>
				</svg>
				<span class="envosta-cart-count" data-envosta-cart-count><?php echo (int) $envosta_cart_count; ?></span>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
