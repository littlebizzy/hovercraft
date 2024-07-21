<?php

function hovercraft_remove_feed_links() {
	remove_theme_support( 'automatic-feed-links' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
}
add_action( 'after_setup_theme', 'hovercraft_remove_feed_links', 99 );

// https://ronangelo.com/disable-feeds-on-wordpress-or-bbpress/

// https://stackoverflow.com/questions/34750148/how-to-delete-remove-wordpress-feed-urls-in-header
// https://github.com/littlebizzy/header-cleanup/blob/1.2.0/core/cleaner.php
// https://slickstack.io/forum/topic/how-to-disable-some-or-all-of-rss-feeds-in-wordpress-website
