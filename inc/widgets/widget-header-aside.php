<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render header aside widget area
function hovercraft_header_aside_widget_area() {
	if ( ! is_active_sidebar( 'hovercraft_header_aside' ) ) {
		return;
	}

	echo '<div class="header-aside">';
	hovercraft_dynamic_sidebar_without_title( 'hovercraft_header_aside' );
	echo '</div><!-- header-aside -->';
}
