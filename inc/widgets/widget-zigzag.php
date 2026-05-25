<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register preferred zigzag widget area
function hovercraft_register_zigzag_sidebar() {
	register_sidebar(
		array(
			'name' => 'ZigZag',
			'id' => 'hovercraft_zigzag',
			'before_widget' => '<div class="zigzag-section widget-wrapper">',
			'after_widget' => '<div class="clear"></div></div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'hovercraft_register_zigzag_sidebar' );

// register legacy zigzag widget areas
function hovercraft_register_legacy_zigzag_sidebars() {
	$legacy_zigzag_sidebars = array(
		array(
			'name' => 'ZigZag (HoverCraft)',
			'id' => 'hovercraft_widget_area_zigzag',
			'class' => 'widget-zigzag',
		),
		array(
			'name' => 'ZigZag #1',
			'id' => 'hovercraft_zigzag_one',
			'class' => 'widget-zigzag-one',
		),
		array(
			'name' => 'ZigZag #2',
			'id' => 'hovercraft_zigzag_two',
			'class' => 'widget-zigzag-two',
		),
		array(
			'name' => 'ZigZag #3',
			'id' => 'hovercraft_zigzag_three',
			'class' => 'widget-zigzag-three',
		),
		array(
			'name' => 'ZigZag #4',
			'id' => 'hovercraft_zigzag_four',
			'class' => 'widget-zigzag-four',
		),
		array(
			'name' => 'ZigZag #5',
			'id' => 'hovercraft_zigzag_five',
			'class' => 'widget-zigzag-five',
		),
		array(
			'name' => 'ZigZag #6',
			'id' => 'hovercraft_zigzag_six',
			'class' => 'widget-zigzag-six',
		),
		array(
			'name' => 'ZigZag #7',
			'id' => 'hovercraft_zigzag_seven',
			'class' => 'widget-zigzag-seven',
		),
		array(
			'name' => 'ZigZag #8',
			'id' => 'hovercraft_zigzag_eight',
			'class' => 'widget-zigzag-eight',
		),
		array(
			'name' => 'ZigZag #9',
			'id' => 'hovercraft_zigzag_nine',
			'class' => 'widget-zigzag-nine',
		),
		array(
			'name' => 'ZigZag #10',
			'id' => 'hovercraft_zigzag_ten',
			'class' => 'widget-zigzag-ten',
		),
		array(
			'name' => 'ZigZag #11',
			'id' => 'hovercraft_zigzag_eleven',
			'class' => 'widget-zigzag-eleven',
		),
	);

	foreach ( $legacy_zigzag_sidebars as $legacy_zigzag_sidebar ) {
		hovercraft_register_widget_area( $legacy_zigzag_sidebar );
	}
}
add_action( 'widgets_init', 'hovercraft_register_legacy_zigzag_sidebars' );

// get preferred zigzag widget area
function hovercraft_get_zigzag_sidebar() {
	return 'hovercraft_zigzag';
}

// get legacy zigzag widget areas
function hovercraft_get_legacy_zigzag_sidebars() {
	return array(
		'hovercraft_widget_area_zigzag',
		'hovercraft_zigzag_one',
		'hovercraft_zigzag_two',
		'hovercraft_zigzag_three',
		'hovercraft_zigzag_four',
		'hovercraft_zigzag_five',
		'hovercraft_zigzag_six',
		'hovercraft_zigzag_seven',
		'hovercraft_zigzag_eight',
		'hovercraft_zigzag_nine',
		'hovercraft_zigzag_ten',
		'hovercraft_zigzag_eleven',
	);
}

// mark legacy zigzag widget areas in admin
function hovercraft_label_legacy_zigzag_sidebars() {
	hovercraft_label_legacy_widget_areas( hovercraft_get_legacy_zigzag_sidebars() );
}
add_action( 'widgets_init', 'hovercraft_label_legacy_zigzag_sidebars', 20 );

// hide empty legacy zigzag widget areas
function hovercraft_hide_empty_legacy_zigzag_sidebars() {
	hovercraft_hide_empty_legacy_widget_areas( hovercraft_get_legacy_zigzag_sidebars() );
}
add_action( 'widgets_init', 'hovercraft_hide_empty_legacy_zigzag_sidebars', 30 );

// check if legacy zigzag widget areas have content
function hovercraft_has_legacy_zigzag_sidebars() {
	return hovercraft_has_active_legacy_widget_areas( hovercraft_get_legacy_zigzag_sidebars() );
}

// check if zigzag meta rows have content
function hovercraft_has_zigzag_meta_rows() {
	for ( $i = 1; $i <= 15; $i++ ) {
		$title = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_title', true );
		$text = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_text', true );

		if ( $title || $text ) {
			return true;
		}
	}

	return false;
}

// show legacy zigzag widget notice
function hovercraft_legacy_zigzag_widget_notice() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	if ( ! hovercraft_has_legacy_zigzag_sidebars() ) {
		return;
	}
	?>
	<div class="notice notice-warning">
		<p><?php esc_html_e( 'HoverCraft legacy ZigZag widget areas are active. Please transfer those ZigZag elements into the new ZigZag widget area.', 'hovercraft' ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'hovercraft_legacy_zigzag_widget_notice' );

// alternate zigzag widget wrappers
function hovercraft_filter_zigzag_widget_params( $params ) {
	global $hovercraft_zigzag_widget_index;

	if ( ! isset( $params[0]['id'] ) || $params[0]['id'] !== hovercraft_get_zigzag_sidebar() ) {
		return $params;
	}

	$class = 'zigzag-section';

	if ( $hovercraft_zigzag_widget_index % 2 !== 0 ) {
		$class = 'zigzag-section-reverse';
	}

	$params[0]['before_widget'] = '<div class="' . esc_attr( $class ) . ' widget-wrapper">';
	$params[0]['after_widget'] = '<div class="clear"></div></div>';

	$hovercraft_zigzag_widget_index++;

	return $params;
}

// render zigzag meta rows
function hovercraft_render_zigzag_meta_rows() {
	for ( $i = 1; $i <= 15; $i++ ) {
		$image_id = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_image_id', true );
		$title = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_title', true );
		$text = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_text', true );
		$link_url = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_link_url', true );
		$link_text = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_link_text', true );

		if ( ! $title && ! $text ) {
			continue;
		}

		$class = 'zigzag-section';

		if ( $i % 2 === 0 ) {
			$class = 'zigzag-section-reverse';
		}
		?>
		<div class="<?php echo esc_attr( $class ); ?>">

			<?php if ( $image_id ) : ?>
				<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
			<?php endif; // end image-id ?>

			<?php if ( $title ) : ?>
				<h3><?php echo esc_html( $title ); ?></h3>
			<?php endif; // end title ?>

			<?php if ( $text ) : ?>
				<?php echo wpautop( esc_html( $text ) ); ?>
			<?php endif; // end text ?>

			<?php if ( $link_url ) : ?>
				<?php
				if ( ! $link_text ) {
					$link_text = 'Read more';
				}
				?>
				<p>
					<a href="<?php echo esc_url( $link_url ); ?>">
						<?php echo esc_html( $link_text ); ?>
					</a>
				</p>
			<?php endif; // end link-url ?>

			<div class="clear"></div>
		</div><!-- zigzag-section -->
		<?php
	}
}

// render zigzag widget area
function hovercraft_render_zigzag_sidebar( $zigzag_sidebar ) {
	global $hovercraft_zigzag_widget_index;

	$hovercraft_zigzag_widget_index = 0;

	add_filter( 'dynamic_sidebar_params', 'hovercraft_filter_zigzag_widget_params' );
	dynamic_sidebar( $zigzag_sidebar );
	remove_filter( 'dynamic_sidebar_params', 'hovercraft_filter_zigzag_widget_params' );
}

// render preferred zigzag widget area with legacy fallback
function hovercraft_render_zigzag() {
	$zigzag_sidebar = hovercraft_get_zigzag_sidebar();
	$legacy_zigzag_sidebars = hovercraft_get_legacy_zigzag_sidebars();
	$has_meta_rows = hovercraft_has_zigzag_meta_rows();
	$has_zigzag = is_active_sidebar( $zigzag_sidebar );
	$has_legacy_zigzag = hovercraft_has_legacy_zigzag_sidebars();

	if ( ! $has_meta_rows && ! $has_zigzag && ! $has_legacy_zigzag ) {
		return;
	}
	?>
	<div class="zigzag-wide-wrapper">

		<?php if ( $has_meta_rows ) : ?>
			<?php hovercraft_render_zigzag_meta_rows(); ?>
		<?php elseif ( $has_zigzag ) : ?>
			<?php hovercraft_render_zigzag_sidebar( $zigzag_sidebar ); ?>
		<?php else : ?>
			<?php foreach ( $legacy_zigzag_sidebars as $index => $legacy_zigzag_sidebar ) : ?>
				<?php
				if ( ! is_active_sidebar( $legacy_zigzag_sidebar ) ) {
					continue;
				}

				$class = 'zigzag-section';

				if ( $index % 2 !== 0 ) {
					$class = 'zigzag-section-reverse';
				}
				?>
				<div class="<?php echo esc_attr( $class ); ?>">
					<?php dynamic_sidebar( $legacy_zigzag_sidebar ); ?>
					<div class="clear"></div>
				</div><!-- zigzag-section -->
			<?php endforeach; // end legacy zigzag sidebars ?>
		<?php endif; // end zigzag source ?>

	</div><!-- zigzag-wide-wrapper -->
	<?php
}
