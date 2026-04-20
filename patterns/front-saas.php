<?php
/**
 * Title: Front Page — SaaS Composition
 * Slug: envosta/front-saas
 * Categories: envosta-hero
 * Description: SaaS landing with announcement pill, centered hero, inline signup, and product mockup card.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"8rem","bottom":"6rem","right":"2rem","left":"2rem"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:8rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"},"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.5rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
		<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;margin-bottom:2rem;padding-top:0.375rem;padding-right:0.875rem;padding-bottom:0.375rem;padding-left:0.5rem">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.04em"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.625rem","right":"0.625rem"}},"color":{"background":"#1a1a1a","text":"#ffffff"},"border":{"radius":"9999px"}}} -->
			<p class="has-text-color has-background" style="border-radius:9999px;color:#ffffff;background-color:#1a1a1a;padding-top:0.2rem;padding-right:0.625rem;padding-bottom:0.2rem;padding-left:0.625rem;font-size:0.7rem;font-weight:700;letter-spacing:0.04em"><?php esc_html_e( 'v2.0', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"}}} -->
			<p style="font-size:0.85rem;font-weight:500"><?php esc_html_e( 'Workflows, automations, and AI search just shipped →', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.75rem, 6.5vw, 5rem)","lineHeight":"1.02","letterSpacing":"-0.035em","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.5rem;font-size:clamp(2.75rem, 6.5vw, 5rem);font-weight:700;letter-spacing:-0.035em;line-height:1.02"><?php esc_html_e( 'The workspace where product teams actually ship.', 'envosta' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.55"},"spacing":{"margin":{"left":"auto","right":"auto","bottom":"2.5rem"}}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-right:auto;margin-bottom:2.5rem;margin-left:auto;font-size:1.2rem;line-height:1.55"><?php esc_html_e( 'One tool for issues, docs, and roadmaps. Fast enough to feel instant, structured enough to trust with the quarter.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.3rem","right":"0.3rem","bottom":"0.3rem","left":"1.25rem"},"margin":{"left":"auto","right":"auto"}},"border":{"radius":"9999px","width":"1px"},"dimensions":{"maxWidth":"480px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;margin-right:auto;margin-left:auto;max-width:480px;padding-top:0.3rem;padding-right:0.3rem;padding-bottom:0.3rem;padding-left:1.25rem">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"layout":{"selfStretch":"fill","flexSize":null}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'you@company.com', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1.25rem","right":"1.25rem"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:9999px;padding-top:0.6rem;padding-right:1.25rem;padding-bottom:0.6rem;padding-left:1.25rem"><?php esc_html_e( 'Get access', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"},"spacing":{"margin":{"top":"1rem"}}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:1rem;font-size:0.85rem"><?php esc_html_e( 'Free for up to 10 members. No credit card required.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"top":"5rem"},"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}},"border":{"radius":"16px"},"color":{"background":"linear-gradient(135deg, #ede9fe 0%, #c7d2fe 60%, #a5b4fc 100%)"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background" style="border-radius:16px;background:linear-gradient(135deg, #ede9fe 0%, #c7d2fe 60%, #a5b4fc 100%);margin-top:5rem;padding:1.25rem">
		<!-- wp:group {"style":{"dimensions":{"aspectRatio":"16/9"},"border":{"radius":"10px"},"background":{"backgroundImage":{"url":"data:image/svg+xml;utf8,%3Csvg xmlns=\u0027http://www.w3.org/2000/svg\u0027 viewBox=\u00270 0 1600 900\u0027%3E%3Crect width=\u00271600\u0027 height=\u0027900\u0027 fill=\u0027%23ffffff\u0027/%3E%3Crect x=\u00270\u0027 y=\u00270\u0027 width=\u00271600\u0027 height=\u002756\u0027 fill=\u0027%23f8fafc\u0027/%3E%3Ccircle cx=\u002728\u0027 cy=\u002728\u0027 r=\u00276\u0027 fill=\u0027%23ef4444\u0027/%3E%3Ccircle cx=\u002752\u0027 cy=\u002728\u0027 r=\u00276\u0027 fill=\u0027%23f59e0b\u0027/%3E%3Ccircle cx=\u002776\u0027 cy=\u002728\u0027 r=\u00276\u0027 fill=\u0027%2322c55e\u0027/%3E%3Crect x=\u00270\u0027 y=\u002756\u0027 width=\u0027260\u0027 height=\u0027844\u0027 fill=\u0027%23fafafa\u0027/%3E%3Crect x=\u002724\u0027 y=\u002796\u0027 width=\u0027210\u0027 height=\u002712\u0027 rx=\u00276\u0027 fill=\u0027%23e2e8f0\u0027/%3E%3Crect x=\u002724\u0027 y=\u0027128\u0027 width=\u0027170\u0027 height=\u002710\u0027 rx=\u00275\u0027 fill=\u0027%23e2e8f0\u0027/%3E%3Crect x=\u002724\u0027 y=\u0027156\u0027 width=\u0027150\u0027 height=\u002710\u0027 rx=\u00275\u0027 fill=\u0027%23e2e8f0\u0027/%3E%3Crect x=\u002724\u0027 y=\u0027184\u0027 width=\u0027190\u0027 height=\u002710\u0027 rx=\u00275\u0027 fill=\u0027%23e2e8f0\u0027/%3E%3Crect x=\u0027300\u0027 y=\u002796\u0027 width=\u0027500\u0027 height=\u002726\u0027 rx=\u00276\u0027 fill=\u0027%23111827\u0027/%3E%3Crect x=\u0027300\u0027 y=\u0027150\u0027 width=\u00271260\u0027 height=\u0027140\u0027 rx=\u002712\u0027 fill=\u0027%23f1f5f9\u0027/%3E%3Crect x=\u0027300\u0027 y=\u0027310\u0027 width=\u0027600\u0027 height=\u0027300\u0027 rx=\u002712\u0027 fill=\u0027%236366f1\u0027 opacity=\u00270.9\u0027/%3E%3Crect x=\u0027920\u0027 y=\u0027310\u0027 width=\u0027640\u0027 height=\u0027300\u0027 rx=\u002712\u0027 fill=\u0027%23f1f5f9\u0027/%3E%3Crect x=\u0027300\u0027 y=\u0027630\u0027 width=\u00271260\u0027 height=\u0027200\u0027 rx=\u002712\u0027 fill=\u0027%23f8fafc\u0027/%3E%3C/svg%3E","source":"file"},"backgroundSize":"cover"}}} -->
		<div class="wp-block-group has-background" style="border-radius:10px;aspect-ratio:16/9;background-image:url('data:image/svg+xml;utf8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 1600 900%27%3E%3Crect width=%271600%27 height=%27900%27 fill=%27%23ffffff%27/%3E%3Crect x=%270%27 y=%270%27 width=%271600%27 height=%2756%27 fill=%27%23f8fafc%27/%3E%3Ccircle cx=%2728%27 cy=%2728%27 r=%276%27 fill=%27%23ef4444%27/%3E%3Ccircle cx=%2752%27 cy=%2728%27 r=%276%27 fill=%27%23f59e0b%27/%3E%3Ccircle cx=%2776%27 cy=%2728%27 r=%276%27 fill=%27%2322c55e%27/%3E%3Crect x=%270%27 y=%2756%27 width=%27260%27 height=%27844%27 fill=%27%23fafafa%27/%3E%3Crect x=%2724%27 y=%2796%27 width=%27210%27 height=%2712%27 rx=%276%27 fill=%27%23e2e8f0%27/%3E%3Crect x=%2724%27 y=%27128%27 width=%27170%27 height=%2710%27 rx=%275%27 fill=%27%23e2e8f0%27/%3E%3Crect x=%2724%27 y=%27156%27 width=%27150%27 height=%2710%27 rx=%275%27 fill=%27%23e2e8f0%27/%3E%3Crect x=%2724%27 y=%27184%27 width=%27190%27 height=%2710%27 rx=%275%27 fill=%27%23e2e8f0%27/%3E%3Crect x=%27300%27 y=%2796%27 width=%27500%27 height=%2726%27 rx=%276%27 fill=%27%23111827%27/%3E%3Crect x=%27300%27 y=%27150%27 width=%271260%27 height=%27140%27 rx=%2712%27 fill=%27%23f1f5f9%27/%3E%3Crect x=%27300%27 y=%27310%27 width=%27600%27 height=%27300%27 rx=%2712%27 fill=%27%236366f1%27 opacity=%270.9%27/%3E%3Crect x=%27920%27 y=%27310%27 width=%27640%27 height=%27300%27 rx=%2712%27 fill=%27%23f1f5f9%27/%3E%3Crect x=%27300%27 y=%27630%27 width=%271260%27 height=%27200%27 rx=%2712%27 fill=%27%23f8fafc%27/%3E%3C/svg%3E');background-size:cover"></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
