<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// insert custom image sizes

add_filter( 'image_size_names_choose', 'hovercraft_medium_large_images_insert' );

// add medium large image size to selector
function hovercraft_medium_large_images_insert( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'medium_large' => esc_html__( 'Medium Large', 'hovercraft' ),
		)
	);
}
