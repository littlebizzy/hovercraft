<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if bbpress is inactive
if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// include bbpress content in search results
function hovercraft_include_bbpress_content_in_search( $post_type_args ) {
	$post_type_args['exclude_from_search'] = false;

	return $post_type_args;
}
add_filter( 'bbp_register_topic_post_type', 'hovercraft_include_bbpress_content_in_search' );
add_filter( 'bbp_register_reply_post_type', 'hovercraft_include_bbpress_content_in_search' );
