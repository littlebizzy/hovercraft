<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Two+Tone">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Noto+Sans+Mono&display=swap">
	<?php 
	$wp_locale = get_locale();
	if (strpos($wp_locale, 'en') === false) { ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+<?php
		$wp_locale = get_locale();
		$wp_locale_trimmed = strstr($wp_locale, '_');
		$wp_locale_final = str_replace('_', '', $wp_locale_trimmed);
		echo rtrim($wp_locale_final); ?>:ital,wght@0,400;0,600;0,700;1,400&display=swap">
	<?php } ?>
	
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
	
	<?php if ( is_active_sidebar( 'hovercraft_topbar_primary' ) ) { ?>
	<div id="topbar">
	<div class="inner">
	<?php if ( is_active_sidebar( 'hovercraft_topbar_secondary' ) ) { ?>
	<div class="topbar-left">
	<?php } else { ?>
	<div class="topbar-center">
	<?php } ?>
			<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_topbar_primary' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
	</div>
	<?php if ( is_active_sidebar( 'hovercraft_topbar_secondary' )) { ?>
	<div class="topbar-right">
		<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_topbar_secondary' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
	</div>
	<?php } ?>
	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- topbar -->
	<?php } ?>
