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
	
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<?php wp_body_open(); ?>

<!-- ADD IMEDIATLY AFTER OPENING BODY -->
<!-- start mobile menu overlay -->
<div id="myNav" class="overlay">
  	<!-- Button to close the overlay navigation -->
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  	<!-- Overlay content -->
  	<div class="overlay-content">
    	<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
  	</div>
</div>
<!-- end mobile menu overlay -->

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
