<?php
/**
 * Title: Announcement Bar
 * Slug: envosta/announcement-bar
 * Categories: header, featured
 * Block Types: core/template-part/header
 * Description: Thin, high-contrast top strip for shipping promos or storewide announcements. Drops above the header.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"full","backgroundColor":"theme-5","textColor":"theme-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-theme-1-color has-theme-5-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.82rem","letterSpacing":"0.02em"}}} -->
	<p class="has-text-align-center" style="font-size:0.82rem;letter-spacing:0.02em"><?php esc_html_e( 'Free shipping on orders over $75 · Free returns within 30 days', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
