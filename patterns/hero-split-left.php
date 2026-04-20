<?php
/**
 * Title: Hero — Split (Image Left)
 * Slug: envosta/hero-split-left
 * Categories: envosta-hero
 * Description: Two-column hero with image on the left, headline and CTA with proof points on the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero","style":{"spacing":{"padding":{"top":"7rem","bottom":"6rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull envosta-hero" style="padding-top:7rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"52%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:52%">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"16px"},"background":{"backgroundImage":{"url":"data:image/svg+xml;utf8,%3Csvg xmlns=\u0027http://www.w3.org/2000/svg\u0027 viewBox=\u00270 0 800 600\u0027%3E%3Cdefs%3E%3ClinearGradient id=\u0027g\u0027 x1=\u00270%25\u0027 y1=\u00270%25\u0027 x2=\u0027100%25\u0027 y2=\u0027100%25\u0027%3E%3Cstop offset=\u00270%25\u0027 stop-color=\u0027%23f5f5f4\u0027/%3E%3Cstop offset=\u0027100%25\u0027 stop-color=\u0027%23d4d4d8\u0027/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\u0027800\u0027 height=\u0027600\u0027 fill=\u0027url(%23g)\u0027/%3E%3Ccircle cx=\u0027400\u0027 cy=\u0027300\u0027 r=\u0027120\u0027 fill=\u0027%23ffffff\u0027 opacity=\u00270.5\u0027/%3E%3C/svg%3E","source":"file"},"backgroundSize":"cover"}}} -->
			<div class="wp-block-group has-background" style="border-radius:16px;aspect-ratio:4/3;background-image:url('data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 800 600%27%3E%3Cdefs%3E%3ClinearGradient id=%27g%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23f5f5f4%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23d4d4d8%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%27800%27 height=%27600%27 fill=%27url(%23g)%27/%3E%3Ccircle cx=%27400%27 cy=%27300%27 r=%27120%27 fill=%27%23ffffff%27 opacity=%270.5%27/%3E%3C/svg%3E');background-size:cover"></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"48%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:48%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'For modern teams', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 4.5vw, 3.75rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:1.5rem;font-size:clamp(2.25rem, 4.5vw, 3.75rem);font-weight:700;letter-spacing:-0.025em;line-height:1.05"><?php esc_html_e( 'Design work that feels inevitable.', 'envosta' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem","lineHeight":"1.6"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.15rem;line-height:1.6"><?php esc_html_e( 'A complete system for teams who ship every week. Thoughtful defaults, serious flexibility.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Start free trial', 'envosta' ); ?></a></div><!-- /wp:button -->
				<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
				<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Book a demo', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"2.5rem"},"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-top:2.5rem">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'No credit card', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( '14-day trial', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Cancel anytime', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
