<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );

?>
<div id="full-screen-search">
	<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
		<button type="button" class="close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>"><i class="material-icons close" aria-hidden="true">close</i></button>
	<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
		<button type="button" class="close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>"><i class="fa-solid fa-x" aria-hidden="true"></i></button>
	<?php endif; // end layout icons ?>

	<?php get_search_form(); ?>
</div><!-- full-screen-search -->
