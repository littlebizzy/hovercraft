<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// main content display

function hovercraft_maybe_load_premain() {
	static $premain_loaded = false;

	if ( $premain_loaded ) {
		return;
	}

	$premain_loaded = true;

	if ( is_front_page() ) {
		get_template_part( 'template-parts/content/premain' );
	}
}

// determine if main content should render
function hovercraft_should_show_main_content() {
	hovercraft_maybe_load_premain();

	if ( is_front_page() && get_theme_mod( 'hovercraft_homepage_hide_main', false ) ) {
		return false;
	}

	return true;
}
