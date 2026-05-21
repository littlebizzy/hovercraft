<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hovercraft_search_id = wp_unique_id( 'search-' );
$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
?>
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $hovercraft_search_id ); ?>"><?php esc_html_e( 'Search', 'hovercraft' ); ?></label>

	<div class="input-container">
		<input id="<?php echo esc_attr( $hovercraft_search_id ); ?>" type="search" class="search-input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search entire website...', 'hovercraft' ); ?>" />

		<button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Submit search', 'hovercraft' ); ?>">
			<?php if ( $hovercraft_layout_icons === 'material_icons_classic' ) : ?>
				<i class="material-icons search" aria-hidden="true">search</i>
			<?php elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) : ?>
				<i class="fa-solid fa-search" aria-hidden="true"></i>
			<?php endif; // end layout icons ?>
		</button>
	</div><!-- input-container -->
</form><!-- searchform -->

