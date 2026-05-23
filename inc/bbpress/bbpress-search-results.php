<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if bbpress is inactive
if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// include bbpress topics in search results
function hovercraft_include_bbpress_topics_in_search( $post_type_args ) {
	$post_type_args['exclude_from_search'] = false;

	return $post_type_args;
}
add_filter( 'bbp_register_topic_post_type', 'hovercraft_include_bbpress_topics_in_search' );

// include bbpress replies in search results
function hovercraft_include_bbpress_replies_in_search( $post_type_args ) {
	$post_type_args['exclude_from_search'] = false;

	return $post_type_args;
}
add_filter( 'bbp_register_reply_post_type', 'hovercraft_include_bbpress_replies_in_search' );
