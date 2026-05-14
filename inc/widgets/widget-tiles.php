<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register preferred tiles widget area
function hovercraft_register_tiles_sidebar() {
	hovercraft_register_widget_area(
		array(
			'name' => 'Tiles',
			'id' => 'hovercraft_tiles',
			'class' => 'tile',
		)
	);
}
add_action( 'widgets_init', 'hovercraft_register_tiles_sidebar' );

// register legacy tile widget areas
function hovercraft_register_legacy_tile_sidebars() {
	$legacy_tile_sidebars = array(
		array(
			'name' => 'Tile #1',
			'id' => 'hovercraft_tile_one',
			'class' => 'widget-tile-one',
		),
		array(
			'name' => 'Tile #2',
			'id' => 'hovercraft_tile_two',
			'class' => 'widget-tile-two',
		),
		array(
			'name' => 'Tile #3',
			'id' => 'hovercraft_tile_three',
			'class' => 'widget-tile-three',
		),
		array(
			'name' => 'Tile #4',
			'id' => 'hovercraft_tile_four',
			'class' => 'widget-tile-four',
		),
		array(
			'name' => 'Tile #5',
			'id' => 'hovercraft_tile_five',
			'class' => 'widget-tile-five',
		),
		array(
			'name' => 'Tile #6',
			'id' => 'hovercraft_tile_six',
			'class' => 'widget-tile-six',
		),
		array(
			'name' => 'Tile #7',
			'id' => 'hovercraft_tile_seven',
			'class' => 'widget-tile-seven',
		),
		array(
			'name' => 'Tile #8',
			'id' => 'hovercraft_tile_eight',
			'class' => 'widget-tile-eight',
		),
		array(
			'name' => 'Tile #9',
			'id' => 'hovercraft_tile_nine',
			'class' => 'widget-tile-nine',
		),
		array(
			'name' => 'Tile #10',
			'id' => 'hovercraft_tile_ten',
			'class' => 'widget-tile-ten',
		),
		array(
			'name' => 'Tile #11',
			'id' => 'hovercraft_tile_eleven',
			'class' => 'widget-tile-eleven',
		),
		array(
			'name' => 'Tile #12',
			'id' => 'hovercraft_tile_twelve',
			'class' => 'widget-tile-twelve',
		),
		array(
			'name' => 'Tile #13',
			'id' => 'hovercraft_tile_thirteen',
			'class' => 'widget-tile-thirteen',
		),
		array(
			'name' => 'Tile #14',
			'id' => 'hovercraft_tile_fourteen',
			'class' => 'widget-tile-fourteen',
		),
		array(
			'name' => 'Tile #15',
			'id' => 'hovercraft_tile_fifteen',
			'class' => 'widget-tile-fifteen',
		),
		array(
			'name' => 'Tile #16',
			'id' => 'hovercraft_tile_sixteen',
			'class' => 'widget-tile-sixteen',
		),
		array(
			'name' => 'Tile #17',
			'id' => 'hovercraft_tile_seventeen',
			'class' => 'widget-tile-seventeen',
		),
		array(
			'name' => 'Tile #18',
			'id' => 'hovercraft_tile_eighteen',
			'class' => 'widget-tile-eighteen',
		),
		array(
			'name' => 'Tile #19',
			'id' => 'hovercraft_tile_nineteen',
			'class' => 'widget-tile-nineteen',
		),
		array(
			'name' => 'Tile #20',
			'id' => 'hovercraft_tile_twenty',
			'class' => 'widget-tile-twenty',
		),
	);

	foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
		hovercraft_register_widget_area( $legacy_tile_sidebar );
	}
}
add_action( 'widgets_init', 'hovercraft_register_legacy_tile_sidebars' );

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

// hide empty legacy tile widget areas
function hovercraft_hide_empty_legacy_tile_sidebars() {
	$legacy_tile_sidebars = hovercraft_get_registered_legacy_tile_sidebars();

	foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
		if ( is_active_sidebar( $legacy_tile_sidebar ) ) {
			continue;
		}

		unregister_sidebar( $legacy_tile_sidebar );
	}
}
add_action( 'widgets_init', 'hovercraft_hide_empty_legacy_tile_sidebars', 30 );

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
