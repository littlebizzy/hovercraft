<?php

/**
 * Include bbPress 'topic' custom post type in WordPress' search results
 */
function ntwb_bbp_topic_cpt_search( $topic_search ) {
	$topic_search['exclude_from_search'] = false;
	return $topic_search;
}
add_filter( 'bbp_register_topic_post_type', 'ntwb_bbp_topic_cpt_search' );

/**
 * Include bbPress 'reply' custom post type in WordPress' search results
 */
function ntwb_bbp_reply_cpt_search( $reply_search ) {
	$reply_search['exclude_from_search'] = false;
	return $reply_search;
}
add_filter( 'bbp_register_reply_post_type', 'ntwb_bbp_reply_cpt_search' );

// Ref: https://gist.github.com/ntwb/7363a1de1184d459f0c3
// Ref: https://bbpress.org/forums/topic/plugin-snippet-hack-to-include-bbpress-topics-in-wordpress-search/
