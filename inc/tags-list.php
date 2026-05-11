<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_show_tags() {
	$post_tags = get_the_tags();
	$separator = ', ';
	$output = '';

	if ( ! empty( $post_tags ) ) {
		foreach ( $post_tags as $tag ) {
			$output .= '<a rel="nofollow" href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a>' . $separator;
		}
	}

	return trim( $output, $separator );
}

// https://developer.wordpress.org/reference/functions/get_the_tags/
// https://wordpress.stackexchange.com/questions/426110/how-to-add-nofollow-flag-to-all-tag-archive-hyperlinks
