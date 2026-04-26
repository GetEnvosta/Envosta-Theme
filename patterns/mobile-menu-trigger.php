<?php
/**
 * Title: Mobile Menu — Trigger
 * Slug: envosta/mobile-menu-trigger
 * Categories: header, featured
 * Keywords: hamburger, menu, drawer, mobile
 * Block Types: core/template-part/header
 * Description: A hamburger button that opens the editable Mobile Menu template part as a slide-out drawer. Edit `data-direction` to switch between slide-over (default), push, or slide-down.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:html -->
<button
	type="button"
	class="envosta-mobile-menu-trigger"
	data-envosta-mobile-menu-open
	data-direction="slide-over"
	aria-label="<?php esc_attr_e( 'Open menu', 'envosta' ); ?>"
>
	<svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
		<path d="M3 6h18 M3 12h18 M3 18h18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
	</svg>
</button>
<!-- /wp:html -->
