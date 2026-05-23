<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if bbpress is inactive
if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// remove nested reply action links
function hovercraft_remove_bbpress_reply_links( $admin_links ) {
	if ( isset( $admin_links['reply'] ) ) {
		unset( $admin_links['reply'] );
	}

	return $admin_links;
}
add_filter( 'bbp_topic_admin_links', 'hovercraft_remove_bbpress_reply_links' );
add_filter( 'bbp_reply_admin_links', 'hovercraft_remove_bbpress_reply_links' );

// disable nested reply submissions
function hovercraft_disable_bbpress_nested_replies( $can_publish, $reply_id = 0, $topic_id = 0 ) {
	// allow replies to the main topic
	if ( empty( $reply_id ) ) {
		return $can_publish;
	}

	// block replies to individual replies
	if ( bbp_is_reply( $reply_id ) ) {
		return false;
	}

	return $can_publish;
}
add_filter( 'bbp_current_user_can_publish_replies', 'hovercraft_disable_bbpress_nested_replies', 10, 3 );
