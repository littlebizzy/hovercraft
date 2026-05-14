<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get rendered legacy tile widget areas
function hovercraft_get_legacy_tile_sidebars() {
	return array(
		'hovercraft_tile_one',
		'hovercraft_tile_two',
		'hovercraft_tile_three',
		'hovercraft_tile_four',
		'hovercraft_tile_five',
		'hovercraft_tile_six',
		'hovercraft_tile_seven',
		'hovercraft_tile_eight',
		'hovercraft_tile_nine',
		'hovercraft_tile_ten',
		'hovercraft_tile_eleven',
		'hovercraft_tile_twelve',
	);
}

// get registered legacy tile widget areas
function hovercraft_get_registered_legacy_tile_sidebars() {
	return array(
		'hovercraft_tile_one',
		'hovercraft_tile_two',
		'hovercraft_tile_three',
		'hovercraft_tile_four',
		'hovercraft_tile_five',
		'hovercraft_tile_six',
		'hovercraft_tile_seven',
		'hovercraft_tile_eight',
		'hovercraft_tile_nine',
		'hovercraft_tile_ten',
		'hovercraft_tile_eleven',
		'hovercraft_tile_twelve',
		'hovercraft_tile_thirteen',
		'hovercraft_tile_fourteen',
		'hovercraft_tile_fifteen',
		'hovercraft_tile_sixteen',
		'hovercraft_tile_seventeen',
		'hovercraft_tile_eighteen',
		'hovercraft_tile_nineteen',
		'hovercraft_tile_twenty',
	);
}

// mark legacy tile widget areas in admin
function hovercraft_label_legacy_tile_sidebars() {
	global $wp_registered_sidebars;

	$legacy_tile_sidebars = hovercraft_get_registered_legacy_tile_sidebars();

	foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
		if ( ! isset( $wp_registered_sidebars[ $legacy_tile_sidebar ]['name'] ) ) {
			continue;
		}

		if ( strpos( $wp_registered_sidebars[ $legacy_tile_sidebar ]['name'], 'Legacy ' ) === 0 ) {
			continue;
		}

		$wp_registered_sidebars[ $legacy_tile_sidebar ]['name'] = 'Legacy ' . $wp_registered_sidebars[ $legacy_tile_sidebar ]['name'];
	}
}
add_action( 'widgets_init', 'hovercraft_label_legacy_tile_sidebars', 20 );

// check if rendered legacy tile widget areas have content
function hovercraft_has_legacy_tile_sidebars() {
	$legacy_tile_sidebars = hovercraft_get_legacy_tile_sidebars();

	foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
		if ( is_active_sidebar( $legacy_tile_sidebar ) ) {
			return true;
		}
	}

	return false;
}

// check if registered legacy tile widget areas have content
function hovercraft_has_registered_legacy_tile_sidebars() {
	$legacy_tile_sidebars = hovercraft_get_registered_legacy_tile_sidebars();

	foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
		if ( is_active_sidebar( $legacy_tile_sidebar ) ) {
			return true;
		}
	}

	return false;
}

// show legacy tile widget notice
function hovercraft_legacy_tile_widget_notice() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	if ( ! hovercraft_has_registered_legacy_tile_sidebars() ) {
		return;
	}
	?>
	<div class="notice notice-warning">
		<p><?php esc_html_e( 'HoverCraft legacy tile widget areas are active. Please transfer those tile elements into the new Tiles widget area.', 'hovercraft' ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'hovercraft_legacy_tile_widget_notice' );

// render preferred tiles widget area with legacy fallback
function hovercraft_render_tiles( $wrapper_id = 'tiles' ) {
	$legacy_tile_sidebars = hovercraft_get_legacy_tile_sidebars();
	$has_tiles = is_active_sidebar( 'hovercraft_tiles' );
	$has_legacy_tiles = hovercraft_has_legacy_tile_sidebars();

	if ( ! $has_tiles && ! $has_legacy_tiles ) {
		return;
	}
	?>
	<div id="<?php echo esc_attr( $wrapper_id ); ?>">

		<?php if ( $has_tiles ) : ?>
			<?php dynamic_sidebar( 'hovercraft_tiles' ); ?>
		<?php else : ?>
			<?php foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) : ?>
				<?php if ( is_active_sidebar( $legacy_tile_sidebar ) ) : ?>
				<div class="tile">
					<?php dynamic_sidebar( $legacy_tile_sidebar ); ?>
					<div class="clear"></div>
				</div><!-- tile -->
				<?php endif; // end legacy tile sidebar ?>
			<?php endforeach; // end legacy tile sidebars ?>
		<?php endif; // end tiles sidebar ?>

		<div class="clear"></div>
	</div><!-- tiles -->
	<?php
}
