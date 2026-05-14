<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get preferred zigzag widget area
function hovercraft_get_zigzag_sidebar() {
	return 'hovercraft_widget_area_zigzag';
}

// get legacy zigzag widget areas
function hovercraft_get_legacy_zigzag_sidebars() {
	return array(
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

// mark zigzag widget areas in admin
function hovercraft_label_zigzag_sidebars() {
	global $wp_registered_sidebars;

	$zigzag_sidebar = hovercraft_get_zigzag_sidebar();

	if ( isset( $wp_registered_sidebars[ $zigzag_sidebar ]['name'] ) ) {
		$wp_registered_sidebars[ $zigzag_sidebar ]['name'] = 'ZigZag';
	}

	$legacy_zigzag_sidebars = hovercraft_get_legacy_zigzag_sidebars();

	foreach ( $legacy_zigzag_sidebars as $legacy_zigzag_sidebar ) {
		if ( ! isset( $wp_registered_sidebars[ $legacy_zigzag_sidebar ]['name'] ) ) {
			continue;
		}

		if ( strpos( $wp_registered_sidebars[ $legacy_zigzag_sidebar ]['name'], 'Legacy ' ) === 0 ) {
			continue;
		}

		$wp_registered_sidebars[ $legacy_zigzag_sidebar ]['name'] = 'Legacy ' . $wp_registered_sidebars[ $legacy_zigzag_sidebar ]['name'];
	}
}
add_action( 'widgets_init', 'hovercraft_label_zigzag_sidebars', 20 );

// hide empty legacy zigzag widget areas
function hovercraft_hide_empty_legacy_zigzag_sidebars() {
	$legacy_zigzag_sidebars = hovercraft_get_legacy_zigzag_sidebars();

	foreach ( $legacy_zigzag_sidebars as $legacy_zigzag_sidebar ) {
		if ( is_active_sidebar( $legacy_zigzag_sidebar ) ) {
			continue;
		}

		unregister_sidebar( $legacy_zigzag_sidebar );
	}
}
add_action( 'widgets_init', 'hovercraft_hide_empty_legacy_zigzag_sidebars', 30 );

// check if legacy zigzag widget areas have content
function hovercraft_has_legacy_zigzag_sidebars() {
	$legacy_zigzag_sidebars = hovercraft_get_legacy_zigzag_sidebars();

	foreach ( $legacy_zigzag_sidebars as $legacy_zigzag_sidebar ) {
		if ( is_active_sidebar( $legacy_zigzag_sidebar ) ) {
			return true;
		}
	}

	return false;
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

// alternate preferred zigzag widget wrappers
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
			<?php
			global $hovercraft_zigzag_widget_index;
			$hovercraft_zigzag_widget_index = 0;
			add_filter( 'dynamic_sidebar_params', 'hovercraft_filter_zigzag_widget_params' );
			dynamic_sidebar( $zigzag_sidebar );
			remove_filter( 'dynamic_sidebar_params', 'hovercraft_filter_zigzag_widget_params' );
			?>
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
