<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get legacy tile widget areas
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

// mark legacy tile widget areas in admin
function hovercraft_label_legacy_tile_sidebars() {
	global $wp_registered_sidebars;

	$legacy_tile_sidebars = hovercraft_get_legacy_tile_sidebars();

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

// check if legacy tile widget areas have content
function hovercraft_has_legacy_tile_sidebars() {
	$legacy_tile_sidebars = hovercraft_get_legacy_tile_sidebars();

	foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
		if ( is_active_sidebar( $legacy_tile_sidebar ) ) {
			return true;
		}
	}

	return false;
}

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
