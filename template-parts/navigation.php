<div class="inner">
	<div class="header-left">
		<div id="branding">
		<?php if (get_theme_mod( 'custom_logo', true)) { get_template_part('template-parts/custom-logo'); } ?>
		<?php if (display_header_text()==true) { get_template_part('template-parts/header-text'); } ?>
	</div><!-- branding -->
	<div class="clear"></div>
	</div><!-- header-left -->
	
	<div class="header-right">
	<div class="menu-choose">
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
            echo "<ul>";
            wp_list_pages( array( 'title_li' => '' ) );
            echo "</ul>";
        	}
        	?>
			<?php
			if ( has_nav_menu( 'cta-header' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-header', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-header'
    		) );
			}
			?>
			<div class="search"><a href="#"><i class="material-icons search">search</i></a></div>
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<div class="cart"><a href="/cart/"><i class="material-icons cart">shopping_cart</i></a><div class="notification-dot"><?php echo WC()->cart->get_cart_contents_count(); ?><div class="clear"></div></div></div>
		<?php } ?>
		</div><!-- menu-desktop -->
		<div class="menu-mobile"><i class="material-icons menu">menu</i></div>
		</div><!--menu-choose -->
	<div class="clear"></div>
	</div><!-- header-right -->
		
<div class="clear"></div>
</div><!-- inner -->
