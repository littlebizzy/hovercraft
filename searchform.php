<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="searchform-items">
		<i class="material-icons search">search</i>
		<input type="search" class="searchinput" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="Search" />
	</div>
</form><!-- searchform -->
