<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// include bbpress topics in wordpress search results
function hovercraft_bbp_topic_search( $topic_search ) {
	$topic_search['exclude_from_search'] = false;

	return $topic_search;
}
add_filter( 'bbp_register_topic_post_type', 'hovercraft_bbp_topic_search' );

// include bbpress replies in wordpress search results
function hovercraft_bbp_reply_search( $reply_search ) {
	$reply_search['exclude_from_search'] = false;

	return $reply_search;
}
add_filter( 'bbp_register_reply_post_type', 'hovercraft_bbp_reply_search' );

// https://gist.github.com/ntwb/7363a1de1184d459f0c3
// https://bbpress.org/forums/topic/plugin-snippet-hack-to-include-bbpress-topics-in-wordpress-search/
