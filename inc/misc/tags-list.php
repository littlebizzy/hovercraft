<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register tags for Pages when enabled
function hovercraft_register_page_tags() {
	$hovercraft_post_tags = get_theme_mod( 'hovercraft_post_tags', 'native_posts_only' );

	if ( 'native_posts_and_pages' === $hovercraft_post_tags || 'native_posts_and_pages_and_custom_posts' === $hovercraft_post_tags ) {
		register_taxonomy_for_object_type( 'post_tag', 'page' );
	}
}
add_action( 'init', 'hovercraft_register_page_tags' );

// get linked post tags
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
