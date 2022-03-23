<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
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
	
		<div id="welcome">
		<div class="inner">
        	<span class="mobile"><strong>This will be visible for mobile users &raquo;</strong></span>
        	<span class="desktop">
				<span class="welcome-left"><strong>This will float left for desktop users &raquo;</strong></span>
				<span class="welcome-right">This will float right for desktop users</span>
			</span>
		<div class="clear"></div>
		</div><!-- inner -->
    	</div><!-- welcome -->
		
