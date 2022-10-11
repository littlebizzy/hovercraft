<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	
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
		
<div id="header">
<div class="inner">
	<div class="header-left">
	<div id="branding">
		<div class="logo"><?php echo get_bloginfo( 'name' ); ?></div>
		<div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
	</div><!-- branding -->
	<div class="clear"></div>
	</div><!-- header-left -->
	
	<div class="header-right">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class'	=> 'menu-wrapper' ) ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'cta-header', 'container_class'	=> 'cta-header' ) ); ?>
	
	<div class="clear"></div>
	</div><!-- header-right -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- header -->
