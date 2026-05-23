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
		$required_attribute = ' aria-required="true" required';
		$required_markup = '<span class="required" aria-hidden="true">*</span>';
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

	unset( $fields['url'] );

	return $fields;
}
add_filter( 'comment_form_default_fields', 'hovercraft_customize_comment_form_fields' );
