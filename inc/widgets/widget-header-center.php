<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register header center widget area
function hovercraft_register_header_center_sidebar() {
	hovercraft_register_widget_area(
		array(
			'name' => 'Header Center',
			'id' => 'hovercraft_header_center',
			'class' => 'widget-header-center',
		)
	);
}
add_action( 'widgets_init', 'hovercraft_register_header_center_sidebar' );

// render header center widget area
function hovercraft_header_center_widget_area() {
	if ( ! is_active_sidebar( 'hovercraft_header_center' ) ) {
		return;
	}

	echo '<div class="header-center">';
	hovercraft_dynamic_sidebar_without_title( 'hovercraft_header_center' );
	echo '</div><!-- header-center -->';
}
