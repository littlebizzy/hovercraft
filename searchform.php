<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="searchform-items">
		<input type="search" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php if ( class_exists( 'WooCommerce' ) ) { echo "Search entire store..."; } else { echo "Search entire site..."; } ?>" />
		<input type="submit" class="search-submit" value="&#xf002" />
	</div><!-- searchform-items -->
</form><!-- searchform -->

<!-- https://codepen.io/jessuppi/pen/pomVZrr -->
