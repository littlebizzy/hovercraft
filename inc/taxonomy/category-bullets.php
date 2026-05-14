<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// category bullets helpers

add_filter( 'template_include', 'hovercraft_bullets_category_template', 99 );

function hovercraft_bullets_category_template( $template ) {
	$bullets_category = get_theme_mod( 'hovercraft_bullets_category', 'none' );

	if ( is_category( $bullets_category ) ) {
		$new_template = locate_template( array( 'page-templates/categories/category-bullets.php' ) );

		if ( '' !== $new_template ) {
			return $new_template;
		}
	}

	return $template;
}
