<?php
/**
 * Title: Archive — Featured Header
 * Slug: envosta/archive-header-featured
 * Categories: envosta-archive
 * Description: Two-column archive header with category eyebrow, title, description, and gradient stat card.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:7rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"3.5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"58%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.72rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.875rem"},"margin":{"bottom":"1.25rem"}},"border":{"radius":"9999px"}},"backgroundColor":"base-2","textColor":"accent","style2":{}} -->
			<p class="envosta-eyebrow has-accent-color has-base-2-background-color has-text-color has-background" style="border-radius:9999px;margin-bottom:1.25rem;padding:0.375rem 0.875rem;font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;display:inline-block;width:fit-content"><?php esc_html_e( 'Category', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:query-title {"type":"archive","style":{"typography":{"fontSize":"clamp(2.25rem, 5vw, 3.5rem)","letterSpacing":"-0.02em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} /-->

			<!-- wp:term-description {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.65"}},"textColor":"muted"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"42%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:42%">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"16px"},"background":{"backgroundImage":{"url":"data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 800 600%27%3E%3Cdefs%3E%3ClinearGradient id=%27g%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23ddd6fe%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23a78bfa%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%27800%27 height=%27600%27 fill=%27url(%23g)%27/%3E%3Ccircle cx=%27620%27 cy=%27140%27 r=%2780%27 fill=%27%23ffffff%27 opacity=%270.35%27/%3E%3Crect x=%2760%27 y=%27380%27 width=%27260%27 height=%27160%27 rx=%2716%27 fill=%27%23ffffff%27 opacity=%270.25%27/%3E%3C/svg%3E","source":"file"},"backgroundSize":"cover"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
			<div class="wp-block-group has-background" style="border-radius:16px;aspect-ratio:4/3;background-image:url('data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 800 600%27%3E%3Cdefs%3E%3ClinearGradient id=%27g%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23ddd6fe%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23a78bfa%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%27800%27 height=%27600%27 fill=%27url(%23g)%27/%3E%3Ccircle cx=%27620%27 cy=%27140%27 r=%2780%27 fill=%27%23ffffff%27 opacity=%270.35%27/%3E%3Crect x=%2760%27 y=%27380%27 width=%27260%27 height=%27160%27 rx=%2716%27 fill=%27%23ffffff%27 opacity=%270.25%27/%3E%3C/svg%3E');background-size:cover;padding:2.5rem">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"color":{"text":"#1a1a1a"}}} -->
				<p class="has-text-color" style="color:#1a1a1a;font-size:3rem;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '12', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"500"},"color":{"text":"#1a1a1a"}}} -->
				<p class="has-text-color" style="color:#1a1a1a;font-size:0.95rem;font-weight:500"><?php esc_html_e( 'Posts in this archive', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
