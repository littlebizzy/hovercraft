<nav class="mobile-nav">
	<?php if ( has_nav_menu( 'main-menu' ) ) {
		wp_nav_menu(array(
			'theme_location' => 'main-menu', 
			'menu_class' => 'menu', 
			'container_class' => 'main-menu'
			));
	} else {
		echo '<div class="main-menu"><ul class="menu">';
		wp_list_pages( array( 'title_li' => '' ) );
		echo '</ul></div>';
	} ?>
</nav>
