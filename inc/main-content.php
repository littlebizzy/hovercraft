<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_should_show_main_content() {
	if ( is_front_page() && get_theme_mod( 'hovercraft_homepage_hide_main', false ) ) {
		return false;
	}

	return true;
}
