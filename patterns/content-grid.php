<?php
/**
 * Title: Content Grid
 * Slug: envosta/content-grid
 * Categories: envosta-content
 * Description: Editorial 3-up blog card grid with gradient cover, category tag, date, read time, and excerpt.
 * Viewport Width: 1440
 */

$envosta_posts = array(
	array(
		'gradient' => 'linear-gradient(135deg, #fef3c7 0%, #fcd34d 100%)',
		'tag'      => __( 'Design', 'envosta' ),
		'title'    => __( 'The quiet power of restraint in modern web design', 'envosta' ),
		'excerpt'  => __( 'Why the best sites feel empty — and what makes that the hardest thing to get right.', 'envosta' ),
		'date'     => __( 'Mar 12', 'envosta' ),
		'read'     => __( '5 min read', 'envosta' ),
	),
	array(
		'gradient' => 'linear-gradient(135deg, #dbeafe 0%, #93c5fd 100%)',
		'tag'      => __( 'Engineering', 'envosta' ),
		'title'    => __( 'Shipping at FSE speed without sacrificing craft', 'envosta' ),
		'excerpt'  => __( 'How our small team ships weekly to 300+ production sites without waking up at 3am.', 'envosta' ),
		'date'     => __( 'Mar 05', 'envosta' ),
		'read'     => __( '8 min read', 'envosta' ),
	),
	array(
		'gradient' => 'linear-gradient(135deg, #fae8ff 0%, #d8b4fe 100%)',
		'tag'      => __( 'Strategy', 'envosta' ),
		'title'    => __( 'Brand systems that survive contact with the real world', 'envosta' ),
		'excerpt'  => __( 'A design system is only as good as its weakest paragraph. Here is how we keep ours strong.', 'envosta' ),
		'date'     => __( 'Feb 26', 'envosta' ),
		'read'     => __( '6 min read', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3.5rem;align-items:flex-end">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Journal', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(1.75rem, 3.5vw, 2.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Latest from the journal', 'envosta' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php esc_html_e( 'View all posts →', 'envosta' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_posts as $post ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-card-hover envosta-reveal","style":{"spacing":{"padding":"0"},"border":{"radius":"12px","width":"1px"}},"backgroundColor":"base","borderColor":"border"} -->
		<div class="wp-block-column envosta-card envosta-card-hover envosta-reveal has-border-color has-base-background-color has-border-border-color has-background" style="border-width:1px;border-radius:12px;padding:0;overflow:hidden">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"16/10"}}} -->
			<div class="wp-block-group" style="background:<?php echo esc_attr( $post['gradient'] ); ?>;aspect-ratio:16/10"></div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","right":"1.75rem","bottom":"1.75rem","left":"1.75rem"},"blockGap":"0.625rem"}}} -->
			<div class="wp-block-group" style="padding:1.5rem 1.75rem 1.75rem">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="align-items:center">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontWeight":"600","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.625rem","right":"0.625rem"}},"border":{"radius":"9999px"}},"backgroundColor":"base-2"} -->
					<p class="has-base-2-background-color has-background" style="border-radius:9999px;padding-top:0.25rem;padding-right:0.625rem;padding-bottom:0.25rem;padding-left:0.625rem;font-size:0.7rem;font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html( $post['tag'] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"muted"} -->
					<p class="has-muted-color has-text-color" style="font-size:0.75rem"><?php echo esc_html( $post['date'] ); ?> · <?php echo esc_html( $post['read'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.2rem","fontWeight":"600","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0.5rem","bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.5rem;font-size:1.2rem;font-weight:600;letter-spacing:-0.01em;line-height:1.3"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $post['title'] ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php echo esc_html( $post['excerpt'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
