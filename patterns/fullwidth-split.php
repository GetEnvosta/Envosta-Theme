<?php
/**
 * Title: Full Width — Image Split
 * Slug: envosta/fullwidth-split
 * Categories: envosta-page
 * Description: Edge-to-edge 50/50 split with gradient SVG image on the left and padded content on the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:column {"width":"50%","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<div class="wp-block-column envosta-reveal" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
		<!-- wp:group {"style":{"dimensions":{"minHeight":"620px"},"background":{"backgroundImage":{"url":"data:image/svg+xml;utf8,%3Csvg xmlns=\u0027http://www.w3.org/2000/svg\u0027 viewBox=\u00270 0 800 1000\u0027%3E%3Cdefs%3E%3ClinearGradient id=\u0027g\u0027 x1=\u00270%25\u0027 y1=\u00270%25\u0027 x2=\u0027100%25\u0027 y2=\u0027100%25\u0027%3E%3Cstop offset=\u00270%25\u0027 stop-color=\u0027%23c7d2fe\u0027/%3E%3Cstop offset=\u002750%25\u0027 stop-color=\u0027%23a78bfa\u0027/%3E%3Cstop offset=\u0027100%25\u0027 stop-color=\u0027%23f472b6\u0027/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\u0027800\u0027 height=\u00271000\u0027 fill=\u0027url(%23g)\u0027/%3E%3Ccircle cx=\u0027220\u0027 cy=\u0027340\u0027 r=\u0027180\u0027 fill=\u0027%23ffffff\u0027 opacity=\u00270.35\u0027/%3E%3Ccircle cx=\u0027560\u0027 cy=\u0027620\u0027 r=\u0027220\u0027 fill=\u0027%23ffffff\u0027 opacity=\u00270.25\u0027/%3E%3Crect x=\u0027140\u0027 y=\u0027720\u0027 width=\u0027520\u0027 height=\u0027180\u0027 rx=\u002724\u0027 fill=\u0027%23ffffff\u0027 opacity=\u00270.28\u0027/%3E%3C/svg%3E","source":"file"},"backgroundSize":"cover"}}} -->
		<div class="wp-block-group has-background" style="min-height:620px;background-image:url('data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 800 1000%27%3E%3Cdefs%3E%3ClinearGradient id=%27g%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23c7d2fe%27/%3E%3Cstop offset=%2750%25%27 stop-color=%27%23a78bfa%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23f472b6%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%27800%27 height=%271000%27 fill=%27url(%23g)%27/%3E%3Ccircle cx=%27220%27 cy=%27340%27 r=%27180%27 fill=%27%23ffffff%27 opacity=%270.35%27/%3E%3Ccircle cx=%27560%27 cy=%27620%27 r=%27220%27 fill=%27%23ffffff%27 opacity=%270.25%27/%3E%3Crect x=%27140%27 y=%27720%27 width=%27520%27 height=%27180%27 rx=%2724%27 fill=%27%23ffffff%27 opacity=%270.28%27/%3E%3C/svg%3E');background-size:cover"></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"50%","verticalAlignment":"center","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"4rem","bottom":"5rem","left":"4rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="padding-top:5rem;padding-right:4rem;padding-bottom:5rem;padding-left:4rem;flex-basis:50%">

		<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
		<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'What we believe', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2.25rem, 4.5vw, 3.5rem)","letterSpacing":"-0.025em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-bottom:1.5rem;font-size:clamp(2.25rem, 4.5vw, 3.5rem);font-weight:700;letter-spacing:-0.025em;line-height:1.05"><?php esc_html_e( 'Craft compounds. Cheap work rarely does.', 'envosta' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.7"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.7"><?php esc_html_e( 'Every pixel is a decision, and every decision either adds to your brand or quietly chips it away. We spend the extra hour so the result holds up two years later — when traffic is up 40x and you have neither time nor budget to rebuild.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
		<div class="wp-block-buttons" style="margin-top:2.5rem">
			<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
			<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Read the manifesto', 'envosta' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
