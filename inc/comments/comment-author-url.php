<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// remove comment author url output
function hovercraft_disable_comment_author_url( $url ) {
	return '';
}
add_filter( 'get_comment_author_url', 'hovercraft_disable_comment_author_url' );

// display comment authors as plain text
function hovercraft_disable_comment_author_link( $return, $author, $comment_id ) {
	return esc_html( $author );
}
add_filter( 'get_comment_author_link', 'hovercraft_disable_comment_author_link', 10, 3 );
