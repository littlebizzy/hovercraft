<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<?php $hovercraft_material_icons = get_theme_mod( 'hovercraft_material_icons', 'classic_only' );
		if ( $hovercraft_material_icons == 'classic_only' ) { ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons">
		<?php } elseif ( $hovercraft_material_icons == 'classic_and_outlined' ) { ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons&family=Material+Icons+Outlined">
		<?php } elseif ( $hovercraft_material_icons == 'classic_and_outlined_and_two_toned' ) { ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Two+Tone">
		<?php } elseif ( $hovercraft_material_icons == 'none' ) { ?>
		<?php } ?>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap">
	
	<style>
	<?php include 'style.css'; ?>
	</style>
	
	<title><?php
		if ( is_front_page() ) {
			$hovercraft_homepage_html_title = get_theme_mod( 'hovercraft_homepage_html_title', 'site_name_site_tagline' );
			if ( $hovercraft_homepage_html_title == 'site_name_site_tagline' ) {
				echo get_option( 'blogname' );
				$blogdescription = get_option( 'blogdescription', "" );
            	if(!empty($blogdescription)) {
            		echo ' | '.$blogdescription;
            	}
			} // if site_name_site_tagline
			elseif ( $hovercraft_homepage_html_title == 'site_name_only' ) {
				echo get_option( 'blogname' );
			} // if site_name_only
			elseif ( $hovercraft_homepage_html_title == 'site_name_page_title' ) {
				echo get_option( 'blogname' );
				$id_frontpage = get_option('page_on_front');
				if(!empty($id_frontpage)) {
            		echo ' | ';
					echo get_the_title($id_frontpage);
				}
			} // if site_name_page_title
			elseif ( $hovercraft_homepage_html_title == 'page_title_only' ) {
				$id_frontpage = get_option('page_on_front');
				echo get_the_title( $id_frontpage );
			} // if page_title_only
		} // if is_front_page
		elseif ( is_archive() ) {
			echo the_archive_title();
			echo ' - ';
			echo get_option( 'blogname' );
		}
		elseif ( is_404() ) {
			echo '404 Error (Page Not Found)';
			echo ' - ';
			echo get_option( 'blogname' );
		}
		else {
			echo trim( wp_title('', false) );
			echo ' - ';
			echo get_option( 'blogname' );
		} ?></title>
	
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<?php wp_body_open(); ?>
	
		<input type="checkbox" id="togglebox" />
	
		<nav id="offcanvas-menu">
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<div class="cart-button-offcanvas-wrapper"><a href="/cart/"><div class="cart-button-offcanvas"><i class="material-icons cart">shopping_cart</i><?php _e( 'My Cart', 'hovercraft' ) ?><div class="notification-dot-offcanvas"><?php echo WC()->cart->get_cart_contents_count(); ?></div></div></a></div><!-- cart-icon-wrapper -->
			<?php } ?>
	<?php 
    if ( has_nav_menu( 'main-menu' ) ) {
    	wp_nav_menu(array(
        	'theme_location' => 'main-menu', 
			'menu_class' => 'menu', 
        	'container_class' => 'offcanvas-menu'
		) );
	} else {
    	echo '<div class="offcanvas-menu"><ul class="menu">';
		wp_list_pages( array( 'title_li' => '' ) );
        echo '</ul></div>';
    }
	?>
	<?php
	if ( has_nav_menu( 'cta-header-secondary' ) ) {
    	wp_nav_menu( array( 
        	'theme_location' => 'cta-header-secondary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-offcanvas-secondary'
    	) );
	}
	?>
	<?php
	if ( has_nav_menu( 'cta-header-primary' ) ) {
    	wp_nav_menu( array( 
        	'theme_location' => 'cta-header-primary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-offcanvas-primary'
    	) );
	}
	?>
</nav><!-- offcanvas-menu -->

<div id="container">
	
	<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) || is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
	<div id="topbar">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) && is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
			<div class="topbar-left">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_topbar_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_topbar_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- topbar-right -->
			<?php } elseif ( is_active_sidebar( 'hovercraft_topbar_left' ) xor is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
			<div class="topbar-center">
				<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) ) { ?>
					<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
					dynamic_sidebar( 'hovercraft_topbar_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				<?php } elseif ( is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
					<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
					dynamic_sidebar( 'hovercraft_topbar_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				<?php } ?>
			</div><!-- topbar-center -->
			<?php } ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- topbar -->
	<?php } ?><!-- if topbar widgets active -->
