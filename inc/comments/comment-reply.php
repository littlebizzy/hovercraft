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
