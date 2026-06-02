<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// remove comment author url output
add_filter( 'get_comment_author_url', '__return_empty_string' );
