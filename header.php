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

	<?php $hovercraft_font_awesome = get_theme_mod( 'hovercraft_font_awesome', 'none' );
		if ( $hovercraft_font_awesome == 'version_6' ) { ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
		<?php } elseif ( $hovercraft_font_awesome == 'version_5' ) { ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<?php } elseif ( $hovercraft_font_awesome == 'version_4' ) { ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/all.min.css">
		<?php } elseif ( $hovercraft_font_awesome == 'none' ) { ?>
	<?php } ?>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap">
	
	<style>
	<?php include 'style.css'; ?>
	</style>
	
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

<div id="container">
	
	<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) || is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
	<div id="topbar">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) && is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
			<div class="topbar-left">
				<?php add_filter('widget_title', '__return_false');
				dynamic_sidebar( 'hovercraft_topbar_left' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
				remove_filter('widget_title', '__return_false'); ?>
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<?php add_filter('widget_title', '__return_false');
				dynamic_sidebar( 'hovercraft_topbar_right' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
				remove_filter('widget_title', '__return_false'); ?>
			</div><!-- topbar-right -->
			<?php } elseif ( is_active_sidebar( 'hovercraft_topbar_left' ) xor is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
			<div class="topbar-center">
				<?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) ) { ?>
					<?php add_filter('widget_title', '__return_false');
					dynamic_sidebar( 'hovercraft_topbar_left' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
					remove_filter('widget_title', '__return_false'); ?>
				<?php } elseif ( is_active_sidebar( 'hovercraft_topbar_right' ) ) { ?>
					<?php add_filter('widget_title', '__return_false');
					dynamic_sidebar( 'hovercraft_topbar_right' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
					remove_filter('widget_title', '__return_false'); ?>
				<?php } ?>
			</div><!-- topbar-center -->
			<?php } ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- topbar -->
	<?php } ?><!-- if topbar widgets active -->
