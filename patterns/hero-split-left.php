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
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"16px"}},"backgroundColor":"base-2"} -->
			<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:16px;aspect-ratio:4/3"></div>
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
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="align-items:center">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'No credit card', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="align-items:center">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( '14-day trial', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="align-items:center">
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
