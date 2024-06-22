<div id="myNav" class="overlay">
	
  	<!-- Button to close the overlay navigation -->
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' ); if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons close">close</i><?php } 
				elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fa-solid fa-x"></i><?php } ?></a>
	
  	<!-- Overlay content -->
  	<div class="overlay-content">
    	<?php 
			if ( has_nav_menu( 'mobile-menu' ) ) {
				wp_nav_menu(array(
                'theme_location' => 'mobile-menu', 
				'menu_class' => 'menu', 
        		'container_class' => 'mobile-menu'
                ));
			} elseif ( has_nav_menu( 'main-menu' ) ) {
            	wp_nav_menu(array(
                'theme_location' => 'main-menu', 
				'menu_class' => 'menu', 
        		'container_class' => 'main-menu'
                ));
        	} else {
            echo '<div class="main-menu"><ul class="menu">';
            wp_list_pages( array( 'title_li' => '' ) );
            echo '</ul></div>';
        	}
        ?>
  	</div>
</div><!-- myNav -->

<div id="offcanvas"> 
	<div class="nav">
		<?php 
			if ( has_nav_menu( 'mobile-menu' ) ) {
				wp_nav_menu(array(
                'theme_location' => 'mobile-menu', 
				'menu_class' => 'menu', 
        		'container_class' => 'mobile-menu'
                ));
			} elseif ( has_nav_menu( 'main-menu' ) ) {
            	wp_nav_menu(array(
                'theme_location' => 'main-menu', 
				'menu_class' => 'menu', 
        		'container_class' => 'main-menu'
                ));
        	} else {
            echo '<div class="main-menu"><ul class="menu">';
            wp_list_pages( array( 'title_li' => '' ) );
            echo '</ul></div>';
        	}
        ?>
	</div>
</div>

<div class="overlay-main"></div>

<!-- https://codepen.io/abhi_pawar/pen/qzpEJL -->
