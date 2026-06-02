<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// customize comment form fields
function hovercraft_customize_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$required_attribute = get_option( 'require_name_email' ) ? ' aria-required="true" required' : '';
	$required_markup = get_option( 'require_name_email' ) ? ' <span class="required" aria-hidden="true">*</span>' : '';

	$fields['author'] = sprintf(
		'<p class="comment-form-author"><label for="comment-author">%s%s</label><input id="comment-author" name="author" type="text" value="%s" size="30" maxlength="245" autocomplete="name"%s></p>',
		esc_html__( 'Name', 'hovercraft' ),
		$required_markup,
		esc_attr( $commenter['comment_author'] ),
		$required_attribute
	);

	$fields['email'] = sprintf(
		'<p class="comment-form-email"><label for="comment-email">%s%s</label><input id="comment-email" name="email" type="email" value="%s" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email"%s></p>',
		esc_html__( 'Email', 'hovercraft' ),
		$required_markup,
		esc_attr( $commenter['comment_author_email'] ),
		$required_attribute
	);

	if ( isset( $fields['cookies'] ) ) {
		$checked_attribute = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

		$fields['cookies'] = sprintf(
			'<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s> <label for="wp-comment-cookies-consent">%s</label></p>',
			$checked_attribute,
			esc_html__( 'Save my name and email in this browser for the next time I comment.', 'hovercraft' )
		);
	}

	unset( $fields['url'] );

	return $fields;
}
add_filter( 'comment_form_default_fields', 'hovercraft_customize_comment_form_fields' );
