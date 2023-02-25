<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Two+Tone">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap">
	
	<style>
	<?php include 'style.css'; ?>
	</style>
	
	<title><?php
		if ( is_front_page() ) {
			echo get_option( 'blogname' );
			echo ' | ';
			echo get_option( 'blogdescription' );
		}
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
	<div class="topbar<?php if ( !is_active_sidebar( 'hovercraft_topbar_left' ) || !is_active_sidebar( 'hovercraft_topbar_right' ) ) { echo " center"; } ?>">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) ) { ?>
			<div class="topbar-left">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_topbar_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- topbar-left -->
			<?php } ?><!-- if topbar_left active -->
			<?php if ( is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
			<div class="topbar-right">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_topbar_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- topbar-right -->
			<?php } ?><!-- if topbar_right active -->
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- topbar -->
	<?php } ?><!-- if topbar widgets active -->

	<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) { ?>
	<div id="preheader-left">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_preheader_left' ); ?>
			<div class="clear"></div>
		</div><!--inner -->
	</div><!-- preheader-left -->
	<?php } ?>

	<?php if ( is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader-right">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_preheader_right' ); ?>
			<div class="clear"></div>
		</div><!--inner -->
	</div><!-- preheader-right -->
	<?php } ?>
	
