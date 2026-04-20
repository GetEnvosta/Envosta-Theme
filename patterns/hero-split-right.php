<?php
/**
 * Title: Hero — Split (Image Right)
 * Slug: envosta/hero-split-right
 * Categories: envosta-hero
 * Description: Two-column hero with copy on the left, image on the right, proof points below.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero","style":{"spacing":{"padding":{"top":"7rem","bottom":"6rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull envosta-hero" style="padding-top:7rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"48%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:48%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Launching soon', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 4.5vw, 3.75rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:1.5rem;font-size:clamp(2.25rem, 4.5vw, 3.75rem);font-weight:700;letter-spacing:-0.025em;line-height:1.05"><?php esc_html_e( 'The workspace built for making things.', 'envosta' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem","lineHeight":"1.6"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.15rem;line-height:1.6"><?php esc_html_e( 'Everything you need to take an idea from first sketch to shipped — minus the clutter.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started free', 'envosta' ); ?></a></div><!-- /wp:button -->
				<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
				<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Watch demo', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"},"padding":{"top":"1.5rem"},"blockGap":"2rem"},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;margin-top:3rem;padding-top:1.5rem">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","letterSpacing":"-0.02em"}}} --><p style="font-size:1.75rem;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '10k+', 'envosta' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Active teams', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","letterSpacing":"-0.02em"}}} --><p style="font-size:1.75rem;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '4.9★', 'envosta' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Average rating', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","letterSpacing":"-0.02em"}}} --><p style="font-size:1.75rem;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '99.9%', 'envosta' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Uptime', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"52%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:52%">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"16px"}},"backgroundColor":"base-2"} -->
			<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:16px;aspect-ratio:4/3"></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
