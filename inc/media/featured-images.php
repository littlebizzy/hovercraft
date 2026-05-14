<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// featured image support

add_theme_support( 'post-thumbnails' );

function hovercraft_post_image_large() {
	global $post;

	if ( ! isset( $post ) || ! is_object( $post ) || empty( $post->ID ) ) {
		return;
	}

	$args = array(
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'numberposts' => 1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_status' => null,
		'post_parent' => $post->ID,
	);

	$attachments = get_posts( $args );

	if ( empty( $attachments ) ) {
		return;
	}

	foreach ( $attachments as $attachment ) {
		$src = wp_get_attachment_image_src( $attachment->ID, 'large' );

		if ( $src ) {
			echo esc_url( $src[0] );
		}
	}
}
