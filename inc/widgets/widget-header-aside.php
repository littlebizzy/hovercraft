<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register header aside widget area
function hovercraft_register_header_aside_sidebar() {
	hovercraft_register_widget_area(
		array(
			'name' => 'Header Aside',
			'id' => 'hovercraft_header_aside',
			'class' => 'widget-header-aside',
		)
	);
}
add_action( 'widgets_init', 'hovercraft_register_header_aside_sidebar' );

// render header aside widget area
function hovercraft_header_aside_widget_area() {
	if ( ! is_active_sidebar( 'hovercraft_header_aside' ) ) {
		return;
	}

	echo '<div class="header-aside">';
	hovercraft_dynamic_sidebar_without_title( 'hovercraft_header_aside' );
	echo '</div><!-- header-aside -->';
}
