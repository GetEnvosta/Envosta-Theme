<?php
/**
 * Title: 404 — Illustrated
 * Slug: envosta/404-illustrated
 * Categories: envosta-404
 * Description: Full-viewport 404 with gradient illustration backdrop, headline, message, and dual CTAs.
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 1600 900%27%3E%3Cdefs%3E%3CradialGradient id=%27g1%27 cx=%2730%25%27 cy=%2740%25%27 r=%2750%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23fef3c7%27 stop-opacity=%271%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23fef3c7%27 stop-opacity=%270%27/%3E%3C/radialGradient%3E%3CradialGradient id=%27g2%27 cx=%2780%25%27 cy=%2770%25%27 r=%2745%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23ddd6fe%27 stop-opacity=%271%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23ddd6fe%27 stop-opacity=%270%27/%3E%3C/radialGradient%3E%3C/defs%3E%3Crect width=%271600%27 height=%27900%27 fill=%27%23fafaf9%27/%3E%3Crect width=%271600%27 height=%27900%27 fill=%27url(%23g1)%27/%3E%3Crect width=%271600%27 height=%27900%27 fill=%27url(%23g2)%27/%3E%3Ccircle cx=%27800%27 cy=%27450%27 r=%27220%27 fill=%27none%27 stroke=%27%23ffffff%27 stroke-width=%272%27 opacity=%270.6%27/%3E%3Ccircle cx=%27800%27 cy=%27450%27 r=%27340%27 fill=%27none%27 stroke=%27%23ffffff%27 stroke-width=%272%27 opacity=%270.4%27/%3E%3C/svg%3E","dimRatio":0,"isUserOverlayColor":true,"minHeight":90,"minHeightUnit":"vh","align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-cover alignfull envosta-reveal" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 1600 900%27%3E%3Cdefs%3E%3CradialGradient id=%27g1%27 cx=%2730%25%27 cy=%2740%25%27 r=%2750%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23fef3c7%27 stop-opacity=%271%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23fef3c7%27 stop-opacity=%270%27/%3E%3C/radialGradient%3E%3CradialGradient id=%27g2%27 cx=%2780%25%27 cy=%2770%25%27 r=%2745%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23ddd6fe%27 stop-opacity=%271%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23ddd6fe%27 stop-opacity=%270%27/%3E%3C/radialGradient%3E%3C/defs%3E%3Crect width=%271600%27 height=%27900%27 fill=%27%23fafaf9%27/%3E%3Crect width=%271600%27 height=%27900%27 fill=%27url(%23g1)%27/%3E%3Crect width=%271600%27 height=%27900%27 fill=%27url(%23g2)%27/%3E%3Ccircle cx=%27800%27 cy=%27450%27 r=%27220%27 fill=%27none%27 stroke=%27%23ffffff%27 stroke-width=%272%27 opacity=%270.6%27/%3E%3Ccircle cx=%27800%27 cy=%27450%27 r=%27340%27 fill=%27none%27 stroke=%27%23ffffff%27 stroke-width=%272%27 opacity=%270.4%27/%3E%3C/svg%3E" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.5rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.5rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Error 404', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.25rem;font-size:clamp(2.5rem, 6vw, 4rem);font-weight:700;letter-spacing:-0.03em;line-height:1.05"><?php esc_html_e( 'We lost this one in the archives.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.15rem","lineHeight":"1.6"}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.15rem;line-height:1.6"><?php esc_html_e( 'The page you were heading toward does not exist — at least not at this address. Try heading home, or reach out and we will help you find it.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"2.5rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2.5rem">
		<!-- wp:button {"style":{"border":{"radius":"9999px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/" style="border-radius:9999px"><?php esc_html_e( 'Back to home', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
		<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="/contact" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Contact support', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
