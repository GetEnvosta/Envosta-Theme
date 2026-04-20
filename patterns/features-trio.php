<?php
/**
 * Title: Features — Trio
 * Slug: envosta/features-trio
 * Categories: envosta-features
 * Description: Three polished feature cards with icon badges, titles, descriptions, and learn-more links.
 * Viewport Width: 1440
 */

$envosta_trio = array(
	array(
		'icon'  => '◆',
		'title' => __( 'Thoughtful defaults', 'envosta' ),
		'body'  => __( 'Start from a foundation that already looks right. Typography, spacing, and color are set — you just write the words.', 'envosta' ),
	),
	array(
		'icon'  => '◈',
		'title' => __( 'Serious flexibility', 'envosta' ),
		'body'  => __( 'Override anything, anywhere, at any level. The design system bends to your brand — it never forces the other way.', 'envosta' ),
	),
	array(
		'icon'  => '◇',
		'title' => __( 'Ships at speed', 'envosta' ),
		'body'  => __( 'Fast to set up, faster to iterate. Every block is tuned for performance, accessibility, and the next three years.', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"4rem"},"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:4rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Why teams choose us', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 3rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Three things we do really well', 'envosta' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.55"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:0.5rem;font-size:1.1rem;line-height:1.55"><?php esc_html_e( 'A modern toolkit for the teams moving fastest.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_trio as $item ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-card-hover envosta-reveal","style":{"spacing":{"padding":{"top":"2.25rem","right":"2rem","bottom":"2.25rem","left":"2rem"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border"} -->
		<div class="wp-block-column envosta-card envosta-card-hover envosta-reveal has-border-color has-border-border-color" style="border-width:1px;border-radius:16px;padding:2.25rem 2rem">
			<!-- wp:group {"style":{"dimensions":{"width":"2.75rem","height":"2.75rem"},"spacing":{"margin":{"bottom":"1.5rem"}},"border":{"radius":"10px"}},"backgroundColor":"base-2","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
			<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:10px;margin-bottom:1.5rem;width:2.75rem;height:2.75rem">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","fontWeight":"600"}},"textColor":"accent"} -->
				<p class="has-text-align-center has-accent-color has-text-color" style="font-size:1.25rem;font-weight:600"><?php echo esc_html( $item['icon'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0.75rem;font-size:1.25rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $item['title'] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.65"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:0.95rem;line-height:1.65"><?php echo esc_html( $item['body'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"spacing":{"margin":{"top":"1.5rem"}}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color" style="margin-top:1.5rem;font-size:0.875rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php esc_html_e( 'Learn more →', 'envosta' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
