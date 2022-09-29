<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
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
	
<div id="topbar">
<div class="inner">
        <span class="mobile"><strong>This will be visible for mobile users &raquo;</strong></span>
        <span class="desktop">
			<span class="welcome-left"><strong>This will float left for desktop users &raquo;</strong></span>
			<span class="welcome-right">This will float right for desktop users</span>
		</span>
<div class="clear"></div>
</div><!-- inner -->
</div><!-- topbar -->
		
<div id="header">
<div class="inner">
	<div id="branding">
	<div id="logo">
		HoverCraft
	</div>
	<div id="tagline">
		WordPress theme with no queries
	</div>
		</div><!-- branding -->
	
	<div id="menu">
		<ul>
			<li>Home</li>
			<li>About Us</li>
			<li>Services</li>
			<li>Contact</li>
		</ul>
	</div>
<div class="clear"></div>
</div><!-- inner -->
</div>
		
