<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// make medium_large images available to insert into posts
add_filter( 'image_size_names_choose', 'hovercraft_medium_large_images_insert' );

function hovercraft_medium_large_images_insert( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'medium_large' => esc_html__( 'Medium Large', 'hovercraft' ),
		)
	);
}

// https://wordpress.stackexchange.com/questions/290259/make-medium-large-images-available-to-insert-into-post
// https://wpmudev.com/blog/wordpress-image-sizes/
