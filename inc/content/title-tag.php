<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// title tag support
function hovercraft_title_tag() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'hovercraft_title_tag' );

// remove bbpress document title filters
if ( class_exists( 'bbPress' ) ) {
	remove_filter( 'wp_title', 'bbp_title', 10, 3 );
	remove_filter( 'document_title_parts', 'bbp_filter_document_title', 10, 1 );
}
