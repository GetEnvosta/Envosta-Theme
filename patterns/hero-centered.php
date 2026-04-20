<?php
/**
 * Title: Hero — Centered
 * Slug: envosta/hero-centered
 * Categories: envosta-hero
 * Description: Centered hero with announcement pill, headline, tagline, dual CTAs, and trust signal.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero envosta-reveal","style":{"spacing":{"padding":{"top":"9rem","bottom":"7rem","right":"2rem","left":"2rem"}},"minHeight":"90vh"},"layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull envosta-hero envosta-reveal" style="min-height:90vh;padding-top:9rem;padding-right:2rem;padding-bottom:7rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"},"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.5rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;margin-bottom:2rem;padding-top:0.375rem;padding-right:0.875rem;padding-bottom:0.375rem;padding-left:0.5rem">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontWeight":"600","letterSpacing":"0.02em"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.625rem","right":"0.625rem"}},"color":{"background":"#1a1a1a","text":"#ffffff"},"border":{"radius":"9999px"}}} -->
		<p class="has-text-color has-background" style="border-radius:9999px;color:#ffffff;background-color:#1a1a1a;padding-top:0.2rem;padding-right:0.625rem;padding-bottom:0.2rem;padding-left:0.625rem;font-size:0.7rem;font-weight:600;letter-spacing:0.02em"><?php esc_html_e( 'NEW', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"}}} -->
		<p style="font-size:0.85rem;font-weight:500"><?php esc_html_e( 'Introducing our new platform →', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4.5rem)","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.5rem;font-size:clamp(2.5rem, 6vw, 4.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.05"><?php esc_html_e( 'Ship work that looks considered.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.55"},"spacing":{"margin":{"left":"auto","right":"auto"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-right:auto;margin-left:auto;font-size:1.25rem;line-height:1.55"><?php esc_html_e( 'A platform for teams who care about the details. Built for speed, designed to scale with your ambition.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"2.5rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2.5rem">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Start free trial', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
		<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'See how it works', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group" style="margin-top:4rem">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","letterSpacing":"0.05em"},"color":{"text":"#f5b50a"}}} -->
		<p class="has-text-color" style="color:#f5b50a;font-size:1rem;letter-spacing:0.05em">★★★★★</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"500"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:0.875rem;font-weight:500"><?php esc_html_e( 'Trusted by 2,400+ teams worldwide', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
