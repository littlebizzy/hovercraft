<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_show_tags() {
	$post_tags = get_the_tags();
	$tag_links = array();

	if ( empty( $post_tags ) ) {
		return '';
	}

	foreach ( $post_tags as $tag ) {
		$tag_links[] = '<a rel="nofollow" href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a>';
	}

	return implode( ', ', $tag_links );
}
