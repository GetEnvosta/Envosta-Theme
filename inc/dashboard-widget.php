<?php
/**
 * Envosta — Dashboard widget: CSS class reference.
 *
 * Adds a small panel to the WordPress admin dashboard listing every
 * utility CSS class and custom block style this theme ships, so
 * authors can see what's available without leaving the editor or
 * digging through theme code.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register the dashboard widget.
 *
 * Visible to anyone who can edit content (no point showing utility
 * classes to subscribers).
 */
if ( ! function_exists( 'envosta_register_dashboard_widget' ) ) :
	function envosta_register_dashboard_widget() {
		if ( ! current_user_can( 'edit_posts' ) ) {
			return;
		}
		wp_add_dashboard_widget(
			'envosta_class_reference',
			__( 'Envosta — Class & Style Reference', 'envosta' ),
			'envosta_render_class_reference_widget'
		);
	}
endif;
add_action( 'wp_dashboard_setup', 'envosta_register_dashboard_widget' );

/**
 * Render the widget contents.
 *
 * Output is one section per group of utilities. Each row is a
 * clickable copy of the class name (single-click selects, so authors
 * can copy-paste straight into the block editor's "Additional CSS
 * class" field).
 */
if ( ! function_exists( 'envosta_render_class_reference_widget' ) ) :
	function envosta_render_class_reference_widget() {
		$groups = envosta_class_reference_groups();
		?>
		<style>
			#envosta_class_reference .inside { padding: 0 12px 12px; }
			.envosta-cls-group { margin: 12px 0 18px; }
			.envosta-cls-group h3 {
				margin: 0 0 6px;
				font-size: 12px;
				text-transform: uppercase;
				letter-spacing: 0.06em;
				color: #50575e;
				font-weight: 600;
			}
			.envosta-cls-group .desc {
				margin: 0 0 8px;
				color: #50575e;
				font-size: 12px;
			}
			.envosta-cls-list { margin: 0; padding: 0; list-style: none; }
			.envosta-cls-list li {
				display: grid;
				grid-template-columns: minmax(0, 0.45fr) 1fr;
				gap: 12px;
				padding: 4px 0;
				font-size: 13px;
				border-bottom: 1px solid #f0f0f1;
			}
			.envosta-cls-list li:last-child { border-bottom: 0; }
			.envosta-cls-list code {
				font-family: SFMono-Regular, Menlo, Consolas, monospace;
				font-size: 12px;
				background: #f6f7f7;
				color: #1d2327;
				padding: 2px 6px;
				border-radius: 3px;
				user-select: all;
				cursor: pointer;
				word-break: break-all;
			}
			.envosta-cls-list .note { color: #50575e; }
			.envosta-cls-tip {
				margin-top: 14px;
				padding: 10px 12px;
				background: #f6f7f7;
				border-left: 3px solid #2271b1;
				font-size: 12px;
				color: #1d2327;
				line-height: 1.5;
			}
		</style>
		<?php foreach ( $groups as $group ) : ?>
			<div class="envosta-cls-group">
				<h3><?php echo esc_html( $group['title'] ); ?></h3>
				<?php if ( ! empty( $group['desc'] ) ) : ?>
					<p class="desc"><?php echo esc_html( $group['desc'] ); ?></p>
				<?php endif; ?>
				<ul class="envosta-cls-list">
					<?php foreach ( $group['items'] as $item ) : ?>
						<li>
							<code><?php echo esc_html( $item['name'] ); ?></code>
							<span class="note"><?php echo esc_html( $item['note'] ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
		<div class="envosta-cls-tip">
			<?php
			echo wp_kses(
				/* translators: %s: name of the editor field. */
				sprintf(
					__( 'Click any class to select it, then paste into the block editor under <strong>%s</strong>. Block styles (Grainy, Push Right, etc.) are applied from the block sidebar&rsquo;s <strong>Styles</strong> tab instead.', 'envosta' ),
					__( 'Advanced &rarr; Additional CSS class', 'envosta' )
				),
				array( 'strong' => array() )
			);
			?>
		</div>
		<?php
	}
endif;

/**
 * The data the widget renders. Returns a list of groups; each group
 * has a title, optional description, and a list of items keyed by
 * `name` (the class) and `note` (a one-line explanation).
 */
if ( ! function_exists( 'envosta_class_reference_groups' ) ) :
	function envosta_class_reference_groups() {
		return array(
			array(
				'title' => __( 'Visibility', 'envosta' ),
				'desc'  => __( 'Hide a block on a given screen size or to a given audience.', 'envosta' ),
				'items' => array(
					array( 'name' => 'hide-mobile',     'note' => __( 'Hidden below 600px.', 'envosta' ) ),
					array( 'name' => 'hide-tablet',     'note' => __( 'Hidden 600–959px.', 'envosta' ) ),
					array( 'name' => 'hide-desktop',    'note' => __( 'Hidden at 960px and up.', 'envosta' ) ),
					array( 'name' => 'hide-logged-in',  'note' => __( 'Removed entirely for logged-in users.', 'envosta' ) ),
					array( 'name' => 'hide-logged-out', 'note' => __( 'Removed entirely for guests.', 'envosta' ) ),
				),
			),
			array(
				'title' => __( 'Overlay drawer width / height', 'envosta' ),
				'desc'  => __( 'Add to a Navigation or Mini Cart block to set the drawer coverage. Default is 100%.', 'envosta' ),
				'items' => array(
					array( 'name' => 'size-25', 'note' => __( '25% of viewport.', 'envosta' ) ),
					array( 'name' => 'size-50', 'note' => __( '50% of viewport.', 'envosta' ) ),
					array( 'name' => 'size-75', 'note' => __( '75% of viewport.', 'envosta' ) ),
				),
			),
			array(
				'title' => __( 'Grainy texture strength', 'envosta' ),
				'desc'  => __( 'On a Group/Cover/Column with the Grainy block style, tune the noise opacity.', 'envosta' ),
				'items' => array(
					array( 'name' => 'grain-subtle', 'note' => __( 'Opacity 0.18.', 'envosta' ) ),
					array( 'name' => 'grain-strong', 'note' => __( 'Opacity 0.55.', 'envosta' ) ),
				),
			),
			array(
				'title' => __( 'Scroll-aware behavior', 'envosta' ),
				'desc'  => __( 'Most often combined on a header group block.', 'envosta' ),
				'items' => array(
					array( 'name' => 'envosta-sticky',              'note' => __( 'Sticks to the top of the viewport.', 'envosta' ) ),
					array( 'name' => 'envosta-opaque-on-scroll',    'note' => __( 'Transparent at top, gains background + blur once scrolled.', 'envosta' ) ),
					array( 'name' => 'envosta-hide-on-scroll-down', 'note' => __( 'Slides up when scrolling down, reappears on up.', 'envosta' ) ),
				),
			),
			array(
				'title' => __( 'Layout helpers', 'envosta' ),
				'items' => array(
					array( 'name' => 'order-0',     'note' => __( 'Flex order 0 on mobile.', 'envosta' ) ),
					array( 'name' => 'order-1',     'note' => __( 'Flex order 1 on mobile.', 'envosta' ) ),
					array( 'name' => 'md:order-0',  'note' => __( 'Flex order 0 at 600px and up.', 'envosta' ) ),
					array( 'name' => 'md:order-1',  'note' => __( 'Flex order 1 at 600px and up.', 'envosta' ) ),
					array( 'name' => 'grow-0',      'note' => __( 'Flex-grow 0 (mobile).', 'envosta' ) ),
					array( 'name' => 'grow',        'note' => __( 'Flex-grow 1 (mobile).', 'envosta' ) ),
					array( 'name' => 'md:grow-0',   'note' => __( 'Flex-grow 0 at 600px and up.', 'envosta' ) ),
					array( 'name' => 'md:grow',     'note' => __( 'Flex-grow 1 at 600px and up.', 'envosta' ) ),
					array( 'name' => 'overflow-hidden', 'note' => __( 'overflow:hidden.', 'envosta' ) ),
					array( 'name' => 'aspect-16/9', 'note' => __( '16:9 aspect ratio for images.', 'envosta' ) ),
					array( 'name' => 'no-underline','note' => __( 'Removes text-decoration on links inside.', 'envosta' ) ),
				),
			),
			array(
				'title' => __( 'Block styles (apply from the Styles tab, not Additional CSS)', 'envosta' ),
				'items' => array(
					array( 'name' => 'Grainy',         'note' => __( 'Group / Cover / Column — adds a noise texture overlay.', 'envosta' ) ),
					array( 'name' => 'Push Right',     'note' => __( 'Navigation / Mini Cart — drawer from left, page pushed right.', 'envosta' ) ),
					array( 'name' => 'Push Left',      'note' => __( 'Navigation / Mini Cart — drawer from right, page pushed left.', 'envosta' ) ),
					array( 'name' => 'Overlay Right',  'note' => __( 'Navigation / Mini Cart — drawer from left, no page push.', 'envosta' ) ),
					array( 'name' => 'Overlay Left',   'note' => __( 'Navigation / Mini Cart — drawer from right, no page push.', 'envosta' ) ),
					array( 'name' => 'Slide Down',     'note' => __( 'Navigation / Mini Cart — drawer drops from the top.', 'envosta' ) ),
				),
			),
		);
	}
endif;
