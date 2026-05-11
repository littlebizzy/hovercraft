<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_should_show_main_content() {
	$hide_main_content = (bool) get_theme_mod( 'hovercraft_homepage_hide_main', false );

	if ( is_front_page() && true === $hide_main_content ) {
		return false;
	}

	return true;
}
