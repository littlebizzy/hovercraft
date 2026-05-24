<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// header cleanup hooks

function hovercraft_remove_feed_links() {
	remove_theme_support( 'automatic-feed-links' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
}
add_action( 'after_setup_theme', 'hovercraft_remove_feed_links', 99 );

// remove wordpress generator output
function hovercraft_remove_wp_generator() {
	return '';
}
add_filter( 'the_generator', 'hovercraft_remove_wp_generator' );
