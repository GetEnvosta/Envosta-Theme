<?php
/**
 * Title: Blog — Featured Post
 * Slug: envosta/blog-header-featured
 * Categories: envosta-blog
 * Description: Featured post card with gradient hero, category pill, title, excerpt, CTA, and author metadata.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:7rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

	<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"accent"} -->
	<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:2rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Featured', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"envosta-card envosta-card-hover envosta-reveal","style":{"spacing":{"padding":"0"},"border":{"radius":"16px","width":"1px"}},"borderColor":"border"} -->
	<div class="wp-block-group envosta-card envosta-card-hover envosta-reveal has-border-color has-border-border-color" style="border-width:1px;border-radius:16px;padding:0;overflow:hidden">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- wp:column {"verticalAlignment":"stretch","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:55%">
				<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/3"},"background":{"backgroundImage":{"url":"data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 1000 750%27%3E%3Cdefs%3E%3ClinearGradient id=%27g%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23fef3c7%27/%3E%3Cstop offset=%2750%25%27 stop-color=%27%23fcd34d%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23f59e0b%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%271000%27 height=%27750%27 fill=%27url(%23g)%27/%3E%3Ccircle cx=%27300%27 cy=%27280%27 r=%27160%27 fill=%27%23ffffff%27 opacity=%270.35%27/%3E%3Crect x=%27520%27 y=%27420%27 width=%27320%27 height=%27200%27 rx=%2720%27 fill=%27%23ffffff%27 opacity=%270.25%27/%3E%3C/svg%3E","source":"file"},"backgroundSize":"cover","backgroundPosition":"50% 50%"}}} -->
				<div class="wp-block-group has-background" style="aspect-ratio:4/3;background-image:url('data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 1000 750%27%3E%3Cdefs%3E%3ClinearGradient id=%27g%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23fef3c7%27/%3E%3Cstop offset=%2750%25%27 stop-color=%27%23fcd34d%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23f59e0b%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%271000%27 height=%27750%27 fill=%27url(%23g)%27/%3E%3Ccircle cx=%27300%27 cy=%27280%27 r=%27160%27 fill=%27%23ffffff%27 opacity=%270.35%27/%3E%3Crect x=%27520%27 y=%27420%27 width=%27320%27 height=%27200%27 rx=%2720%27 fill=%27%23ffffff%27 opacity=%270.25%27/%3E%3C/svg%3E');background-size:cover;background-position:50% 50%;height:100%"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding:3rem;flex-basis:45%">
				<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.7rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.875rem"},"margin":{"bottom":"1.25rem"}},"border":{"radius":"9999px"}},"backgroundColor":"base-2","textColor":"accent"} -->
				<p class="envosta-eyebrow has-accent-color has-base-2-background-color has-text-color has-background" style="border-radius:9999px;margin-bottom:1.25rem;padding:0.375rem 0.875rem;font-size:0.7rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;display:inline-block;width:fit-content"><?php esc_html_e( 'Design', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h2 class="wp-block-heading" style="margin-bottom:1rem;font-size:clamp(1.75rem, 3.5vw, 2.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><a href="#" style="color:inherit;text-decoration:none"><?php esc_html_e( 'The quiet power of restraint in modern web design', 'envosta' ); ?></a></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.65"},"spacing":{"margin":{"bottom":"1.75rem"}}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:1.75rem;font-size:1rem;line-height:1.65"><?php esc_html_e( 'Why the best sites feel nearly empty — and what makes that the hardest thing to get right. A short essay on subtraction as a craft.', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.75rem"}}},"textColor":"accent"} -->
				<p class="has-accent-color has-text-color" style="margin-bottom:1.75rem;font-size:0.9rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php esc_html_e( 'Read article →', 'envosta' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","padding":{"top":"1.25rem"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:1.25rem">
					<!-- wp:group {"style":{"dimensions":{"width":"2rem","height":"2rem"},"border":{"radius":"9999px"},"background":{"backgroundImage":{"url":"data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 64 64%27%3E%3Cdefs%3E%3ClinearGradient id=%27a%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23fcd34d%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23a78bfa%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%2764%27 height=%2764%27 fill=%27url(%23a)%27/%3E%3C/svg%3E","source":"file"},"backgroundSize":"cover"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-background" style="border-radius:9999px;width:2rem;height:2rem;background-image:url('data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 64 64%27%3E%3Cdefs%3E%3ClinearGradient id=%27a%27 x1=%270%25%27 y1=%270%25%27 x2=%27100%25%27 y2=%27100%25%27%3E%3Cstop offset=%270%25%27 stop-color=%27%23fcd34d%27/%3E%3Cstop offset=%27100%25%27 stop-color=%27%23a78bfa%27/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%2764%27 height=%2764%27 fill=%27url(%23a)%27/%3E%3C/svg%3E');background-size:cover"></div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"}}} -->
					<p style="font-size:0.85rem;font-weight:500"><?php esc_html_e( 'Marta Liang', 'envosta' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}},"textColor":"muted"} -->
					<p class="has-muted-color has-text-color" style="font-size:0.85rem"><?php esc_html_e( '· Mar 12 · 5 min read', 'envosta' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
