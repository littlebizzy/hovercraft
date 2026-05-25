<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add header logo support
function hovercraft_logo() {
	$logo_defaults = array(
		'height' => 100,
		'width' => 250,
		'flex-height' => true,
		'flex-width' => true,
	);

	add_theme_support( 'custom-logo', $logo_defaults );
}
add_action( 'after_setup_theme', 'hovercraft_logo' );
