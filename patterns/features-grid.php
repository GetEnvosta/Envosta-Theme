<?php
/**
 * Title: Features — Grid
 * Slug: envosta/features-grid
 * Categories: envosta-features
 * Description: Six-cell feature grid with numeric badges, titles, and descriptions on a soft background.
 * Viewport Width: 1440
 */

$envosta_grid = array(
	array( 'title' => __( 'Built for speed', 'envosta' ),     'body' => __( 'Lightweight pages that score on Core Web Vitals and never keep users waiting.', 'envosta' ) ),
	array( 'title' => __( 'Accessible by default', 'envosta' ),'body' => __( 'Semantic structure, keyboard-first, and WCAG AA contrast — built in, not bolted on.', 'envosta' ) ),
	array( 'title' => __( 'Flexible design tokens', 'envosta' ),'body' => __( 'Swap colors, typography, and spacing in one file — your brand, zero refactors.', 'envosta' ) ),
	array( 'title' => __( 'SEO ready', 'envosta' ),           'body' => __( 'Structured data, clean markup, and smart meta so search engines do the work for you.', 'envosta' ) ),
	array( 'title' => __( 'Blazing mobile', 'envosta' ),      'body' => __( 'Designed mobile-first with fluid typography and smart block behavior at every breakpoint.', 'envosta' ) ),
	array( 'title' => __( 'Future proof', 'envosta' ),        'body' => __( 'Native FSE blocks and standards-first code so your site still runs in five years.', 'envosta' ) ),
);
?>
<!-- wp:group {"align":"full","className":"is-style-envosta-section-soft","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-envosta-section-soft has-base-2-background-color has-background" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"4rem"},"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:4rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Everything you need', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 3rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Built for the work ahead', 'envosta' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.55"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:0.5rem;font-size:1.1rem;line-height:1.55"><?php esc_html_e( 'Six foundations that make the difference between a site and a system.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.25rem","left":"1.25rem"}}}} -->
	<div class="wp-block-columns">
		<?php for ( $col = 0; $col < 3; $col++ ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"1.25rem"}}} -->
		<div class="wp-block-column">
			<?php for ( $row = 0; $row < 2; $row++ ) : $i = $col + ( $row * 3 ); $num = str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?>
			<!-- wp:group {"className":"envosta-reveal envosta-card-hover","style":{"spacing":{"padding":{"top":"1.75rem","right":"1.75rem","bottom":"1.75rem","left":"1.75rem"}},"border":{"radius":"12px","width":"1px"}},"backgroundColor":"base","borderColor":"border"} -->
			<div class="wp-block-group envosta-reveal envosta-card-hover has-border-color has-base-background-color has-border-border-color has-background" style="border-width:1px;border-radius:12px;padding:1.75rem">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"0.75rem"}}},"textColor":"accent"} -->
				<p class="has-accent-color has-text-color" style="margin-bottom:0.75rem;font-size:0.7rem;font-weight:700;letter-spacing:0.08em"><?php echo esc_html( $num ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-bottom:0.5rem;font-size:1.1rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $envosta_grid[ $i ]['title'] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php echo esc_html( $envosta_grid[ $i ]['body'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endfor; ?>
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
