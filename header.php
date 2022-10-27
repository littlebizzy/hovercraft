<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans<?php if (get_locale() == 'ko_KR') { echo "+KR"; } ?>:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
	
	<style>
	<?php include 'style.css'; ?>
	</style>
	
	<title><?php
		if (is_home() || is_front_page()) {
			echo get_option('blogname');
			echo ' | ';
			echo get_option('blogdescription');
		}
		elseif (is_category()) {
			echo single_cat_title();
			echo ' - ';
			echo get_option('blogname');
		}
		elseif (is_404()){
			echo '404 Error (Page Not Found)';
			echo ' - ';
			echo get_option('blogname');
		}
		else {
			echo trim(wp_title('', false));
			echo ' - ';
			echo get_option('blogname');
		} ?></title>
	<?php wp_head(); ?>
	</head>
	<body>

<div id="container">
	
	<?php if ( is_active_sidebar('hovercraft_topbar_major')) { ?>
	<div id="topbar">
	<div class="inner">
	<?php if ( is_active_sidebar('hovercraft_topbar_minor')) { ?>
	<div class="topbar-left">
	<?php } else { ?>
	<div class="topbar-center">
	<?php } ?>
			<?php add_filter ( 'widget_title' , 'my_widget_title', 10, 1); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_topbar_major' ); remove_filter('widget_title', 'my_widget_title'); ?>
	</div>
	<?php if ( is_active_sidebar('hovercraft_topbar_minor')) { ?>
	<div class="topbar-right">
		<?php add_filter ( 'widget_title' , 'my_widget_title', 10, 1); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_topbar_minor' ); remove_filter('widget_title', 'my_widget_title'); ?>
	</div>
	<?php } ?>
	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- topbar -->
	<?php } ?>
		
	<?php if (is_front_page()) { ?><div id="splash-wrapper"><div class="splash-wide" style="background: 
		linear-gradient(60deg,
    rgba(55, 71, 79, 0.7777485994397759) 30%,
    rgba(255, 255, 255, 0) 100%), url(<?php 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
if (empty($url)){ echo "https://source.unsplash.com/featured/1600x900?nature"; } else { echo $url; } ?>);		
background-position: center center;
background-size:cover;
background-repeat:no-repeat;
">

<div id="header-home"><?php } else { ?><div id="header-page"><?php } ?>
<div class="inner">
	<div class="header-left">
	<div id="branding">
		<div class="branding-left">
		<div class="site-logo" style="background:url(<?php 
								 $custom_logo_id = get_theme_mod( 'custom_logo' );
$logourl = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								// if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } 
								echo esc_url( $logourl[0]); ?>);
background-position: center center;
background-size:contain;
background-repeat:no-repeat;"></div>
		</div><!-- branding-left -->
		<div class="branding-right">
		<div class="site-title"><?php echo get_bloginfo( 'name' ); ?></div>
		<div class="site-tagline"><?php echo get_bloginfo( 'description' ); ?></div>
		</div><!-- branding-right -->
	</div><!-- branding -->
	<div class="clear"></div>
	</div><!-- header-left -->
	
	<div class="header-right">
	<div class="menu-choose">
		<div class="menu-desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class'	=> 'menu-wrapper' ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'cta-header', 'container_class'	=> 'cta-header' ) ); ?>
			<div class="search"><i class="material-icons search">search</i></div>
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
</div><!-- header-home -->
