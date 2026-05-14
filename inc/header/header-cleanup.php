<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads header header cleanup logic

function hovercraft_remove_feed_links() {
	remove_theme_support( 'automatic-feed-links' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
}
add_action( 'after_setup_theme', 'hovercraft_remove_feed_links', 99 );
