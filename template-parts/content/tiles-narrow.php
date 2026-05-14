<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$legacy_tile_sidebars = array(
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

$has_legacy_tiles = false;

foreach ( $legacy_tile_sidebars as $legacy_tile_sidebar ) {
	if ( is_active_sidebar( $legacy_tile_sidebar ) ) {
		$has_legacy_tiles = true;
		break;
	}
}

if ( ! is_active_sidebar( 'hovercraft_tiles' ) && ! $has_legacy_tiles ) {
	return;
}

?>
<div id="tiles-narrow">

	<?php if ( is_active_sidebar( 'hovercraft_tiles' ) ) : ?>
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
</div><!-- tiles-narrow -->
