<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// remove all reply links from both topics and individual replies
function hovercraft_remove_all_reply_links( $links ) {
	if ( isset( $links['reply'] ) ) {
		unset( $links['reply'] );
	}

	return $links;
}
add_filter( 'bbp_topic_admin_links', 'hovercraft_remove_all_reply_links' );
add_filter( 'bbp_reply_admin_links', 'hovercraft_remove_all_reply_links' );

// disable replying to individual replies, allow only replying to the main topic
function hovercraft_disable_reply_to_individual_replies( $can_publish, $reply_id = 0, $topic_id = 0 ) {
	if ( $reply_id && bbp_is_reply( $reply_id ) ) {
		return false;
	}

	return $can_publish;
}
add_filter( 'bbp_current_user_can_publish_replies', 'hovercraft_disable_reply_to_individual_replies', 10, 3 );
