<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// customize comment form fields
function hovercraft_customize_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$require_name_email = get_option( 'require_name_email' );
	$required_attribute = '';
	$required_markup = '';

	// set required field markup
	if ( $require_name_email ) {
		$required_attribute = " aria-required='true' required";
		$required_markup = '<span class="required">*</span>';
	}

	$fields['author'] = sprintf(
		'<p class="comment-form-author"><label for="comment-author">%s</label> %s<input id="comment-author" name="author" type="text" value="%s" size="30"%s></p>',
		esc_html__( 'Name', 'hovercraft' ),
		$required_markup,
		esc_attr( $commenter['comment_author'] ),
		$required_attribute
	);

	$fields['email'] = sprintf(
		'<p class="comment-form-email"><label for="comment-email">%s</label> %s<input id="comment-email" name="email" type="email" value="%s" size="30"%s></p>',
		esc_html__( 'Email', 'hovercraft' ),
		$required_markup,
		esc_attr( $commenter['comment_author_email'] ),
		$required_attribute
	);

	$fields['url'] = sprintf(
		'<p class="comment-form-url"><label for="comment-url">%s</label><input id="comment-url" name="url" type="url" value="%s" size="30"></p>',
		esc_html__( 'Website', 'hovercraft' ),
		esc_attr( $commenter['comment_author_url'] )
	);

	return $fields;
}
add_filter( 'comment_form_default_fields', 'hovercraft_customize_comment_form_fields' );

// customize comment form heading markup
function hovercraft_customize_comment_form_defaults( $defaults ) {
	$defaults['title_reply_before'] = '<h3 id="reply-title" class="comment-reply-title">';
	$defaults['title_reply_after'] = '</h3>';

	return $defaults;
}
add_filter( 'comment_form_defaults', 'hovercraft_customize_comment_form_defaults' );
