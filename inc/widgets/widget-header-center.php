<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render header center widget area
function hovercraft_header_center_widget_area() {
	if ( ! is_active_sidebar( 'hovercraft_header_center' ) ) {
		return;
	}

	echo '<div class="header-center">';
	hovercraft_dynamic_sidebar_without_title( 'hovercraft_header_center' );
	echo '</div><!-- header-center -->';
}
