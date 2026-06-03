<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// enqueue threaded comment reply support
function hovercraft_enqueue_comment_reply_script() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hovercraft_enqueue_comment_reply_script' );

// prevent delays from breaking comment replies
function hovercraft_comment_reply_script_loader_tag( $tag, $handle, $src ) {
	if ( $handle !== 'comment-reply' ) {
		return $tag;
	}

	if ( strpos( $tag, 'data-cfasync=' ) === false ) {
		$tag = str_replace( '<script ', '<script data-cfasync="false" ', $tag );
	}

	$tag = str_replace( ' async', '', $tag );
	$tag = preg_replace( '/\sdata-wp-strategy=(["\'])async\1/', '', $tag );
	$tag = preg_replace( '/\sfetchpriority=(["\'])low\1/', '', $tag );

	return $tag;
}
add_filter( 'script_loader_tag', 'hovercraft_comment_reply_script_loader_tag', 10, 3 );
