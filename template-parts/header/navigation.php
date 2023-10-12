<?php $hovercraft_desktop_header_width = get_theme_mod( 'hovercraft_desktop_header_width', 'full' );
		if ( $hovercraft_desktop_header_width == 'fixed' ) { ?><div class="inner"><?php } else { ?><div class="full"><?php } ?>
	
	<div class="header-left">
		<?php get_template_part( 'template-parts/header/branding' ); ?>
	</div><!-- header-left -->
	
	<div class="header-right">
	<div class="menu-choose">
		
		<div class="menu-mobile-wrapper">
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<a href="/cart/"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
				if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons shopping_cart">shopping_cart</i><?php } 
				elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fas fa-shopping-cart"></i><?php } ?></a><div class="notification-dot"><?php echo WC()->cart->get_cart_contents_count(); ?></div><!-- notification-dot -->
			<?php } ?>
	 		<a class="nav-icon mobile-menu-trig" onclick="openNav()"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
				if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons menu">menu</i><?php } 
				elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fa-solid fa-bars"></i><?php } ?></a>
		</div><!--menu-mobile-wrapper -->
		
		<div class="menu-desktop">
			<?php // wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>
			<?php 
        	if ( has_nav_menu( 'main-menu' ) ) {
            wp_nav_menu(array(
                'theme_location' => 'main-menu', 
				'menu_class' => 'menu', 
        		'container_class' => 'main-menu'
                ));
        	}else{
            echo '<div class="main-menu"><ul class="menu">';
            wp_list_pages( array( 'title_li' => '' ) );
            echo '</ul></div>';
        	}
        	?>
			<?php // https://inthedigital.co.uk/use-phps-in_array-to-compare-a-variable-to-multiple-values/
			$search_icon_status = get_theme_mod( 'hovercraft_search_icon', 'desktop_only' );
			if ( in_array( $search_icon_status, ['desktop_only', 'desktop_and_mobile'] )) { ?>
				<div class="search-icon-wrapper"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
				if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons search">search</i><?php } 
				elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fas fa-search"></i><?php } ?></div><!-- search-icon-wrapper -->
			<?php } ?>
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<div class="cart-icon-wrapper"><a href="/cart/"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
				if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons shopping_cart">shopping_cart</i><?php } 
				elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fas fa-shopping-cart"></i><?php } ?></a><div class="notification-dot"><?php echo WC()->cart->get_cart_contents_count(); ?></div></div><!-- cart-icon-wrapper -->
			<?php } ?>
			<?php
			if ( has_nav_menu( 'cta-header-secondary' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-header-secondary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-header-secondary'
    		) );
			}
			?>
			<?php
			if ( has_nav_menu( 'cta-header-primary' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-header-primary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-header-primary'
    		) );
			}
			?>
		</div><!-- menu-desktop -->
		
	</div><!--menu-choose -->
	<div class="clear"></div>
	</div><!-- header-right -->
		
<div class="clear"></div>
</div><!-- inner -->

<!-- https://www.wpbeginner.com/plugins/how-to-add-a-full-screen-search-overlay-in-wordpress/ -->
