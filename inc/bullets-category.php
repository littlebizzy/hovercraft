<?php

add_filter( 'template_include', 'bullets_category_template', 99 );

function bullets_category_template( $template ) {
	$bullets_category = get_theme_mod( 'hovercraft_bullets_category', 'none' ); // depends on inc/category-bullets-assign.php
    if ( is_category( $bullets_category )  ) {
        $new_template = locate_template( array( 'page-templates/categories/category-bullets.php' ) );
	if ( '' != $new_template ) {
	    return $new_template ;
	}
    }
    return $template;
}

// https://developer.wordpress.org/reference/hooks/template_include/
// https://developer.wordpress.org/reference/hooks/type_template/
// https://wordpress.stackexchange.com/questions/402354/how-to-overwrite-the-category-template-in-a-plugin
