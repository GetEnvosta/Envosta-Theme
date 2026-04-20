<?php
/**
 * Title: About — Split
 * Slug: envosta/about-split
 * Categories: envosta-content
 * Description: Two-column about section with portrait image, narrative copy, stat row, and signature CTA.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:45%">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/5"},"border":{"radius":"16px"}},"backgroundColor":"accent-soft"} -->
				<div class="wp-block-group has-accent-soft-background-color has-background" style="border-radius:16px;aspect-ratio:4/5"></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Our story', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 3rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:1.5rem;font-size:clamp(2rem, 4vw, 3rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Built from real work, not theory.', 'envosta' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.75"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.75"><?php esc_html_e( 'We started this because we were tired of shipping sites that felt like compromises. Every template we tried wanted us to bend to its way of working.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.75"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.75"><?php esc_html_e( 'So we built the thing we wanted — a foundation that keeps up with ambition and never gets in the way.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"2.5rem"},"padding":{"top":"1.75rem","bottom":"1.75rem"},"blockGap":"2.5rem"},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:2.5rem;padding-top:1.75rem;padding-bottom:1.75rem">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}}} --><p style="font-size:1.75rem;font-weight:700;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '12+', 'envosta' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Years shipping', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}}} --><p style="font-size:1.75rem;font-weight:700;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '300+', 'envosta' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Sites live', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}}} --><p style="font-size:1.75rem;font-weight:700;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '100%', 'envosta' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted"} --><p class="has-muted-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Referral rate', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
				<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Read our full story', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
