<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-container">
		<input type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php _e( 'Search entire website... ', 'hovercraft' ); ?>" />
		<button type="submit" class="search-submit" name="submit"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
			if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons search">search</i><?php } 
			elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fas fa-search"></i><?php } ?></button>
	</div><!-- input-container -->
</form><!-- searchform -->

<!-- https://codepen.io/jessuppi/pen/pomVZrr -->
