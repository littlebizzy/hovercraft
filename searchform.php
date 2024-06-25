<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-container">
		<input type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php echo "Search entire site..."; ?>" />
		<button type="submit" class="search-submit" name="submit"><i class="material-icons">search</i></button>
	</div><!-- input-container -->
</form><!-- searchform -->

<!-- https://codepen.io/jessuppi/pen/pomVZrr -->
