<?php

add_filter( 'template_include', 'portal_category_template', 99 );
function portal_category_template( $template ) {
	$portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' ); // depends on inc/categories-array.php
    if ( is_category( $portal_category )  ) {
        $new_template = locate_template( array( 'page-templates/categories/category-portal.php' ) );
	if ( '' != $new_template ) {
	    return $new_template ;
	}
    }
    return $template;
}

// https://developer.wordpress.org/reference/hooks/template_include/
// https://developer.wordpress.org/reference/hooks/type_template/
// https://wordpress.stackexchange.com/questions/402354/how-to-overwrite-the-category-template-in-a-plugin
