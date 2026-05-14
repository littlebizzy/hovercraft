<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// bbpress search results

if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// enable bbpress topic search
function hovercraft_bbp_topic_search( $topic_search ) {
	$topic_search['exclude_from_search'] = false;

	return $topic_search;
}
add_filter( 'bbp_register_topic_post_type', 'hovercraft_bbp_topic_search' );

// enable bbpress reply search
function hovercraft_bbp_reply_search( $reply_search ) {
	$reply_search['exclude_from_search'] = false;

	return $reply_search;
}
add_filter( 'bbp_register_reply_post_type', 'hovercraft_bbp_reply_search' );
