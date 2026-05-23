<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if post is password-protected
if ( post_password_required() ) {
	return;
}

// exit if comments are closed and none exist
if ( ! comments_open() && ! get_comments_number() ) {
	return;
}

// load comments template
comments_template();
