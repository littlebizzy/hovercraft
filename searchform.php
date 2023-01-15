<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="searchform-items">
		<input type="search" class="searchinput" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php if ( class_exists( 'WooCommerce' ) ) { echo "Search entire store..."; } else { echo "Search entire site..."; } ?>" />
	</div><!-- searchform-items -->
</form><!-- searchform -->
