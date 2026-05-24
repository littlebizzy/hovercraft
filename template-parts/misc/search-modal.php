<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );

?>
<div id="full-screen-search" class="search-modal" role="dialog" aria-modal="true" aria-hidden="true" aria-label="<?php esc_attr_e( 'Search', 'hovercraft' ); ?>">
	<button type="button" class="search-modal-close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>">
		<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
			<i class="material-icons close" aria-hidden="true">close</i>
		<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
			<i class="fa-solid fa-x" aria-hidden="true"></i>
		<?php endif; // end layout icons ?>
	</button><!-- search-modal-close -->

	<div class="search-modal-panel">
		<?php get_search_form(); ?>
	</div><!-- search-modal-panel -->
</div><!-- full-screen-search -->
