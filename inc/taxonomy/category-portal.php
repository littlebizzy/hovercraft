<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// category portal helpers

add_filter( 'template_include', 'hovercraft_portal_category_template', 99 );

function hovercraft_portal_category_template( $template ) {
	$portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' );

	if ( is_category( $portal_category ) ) {
		$new_template = locate_template( array( 'page-templates/categories/category-portal.php' ) );

		if ( '' !== $new_template ) {
			return $new_template;
		}
	}

	return $template;
}
