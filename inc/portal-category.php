<?php

add_filter( 'template_include', 'portal_category_template', 99 );
function portal_category_template( $template ) {
    if ( is_category( 'support' )  ) {
        $new_template = locate_template( array( 'page-templates/portal-category-template.php' ) );
	if ( '' != $new_template ) {
	    return $new_template ;
	}
    }
    return $template;
}

// https://developer.wordpress.org/reference/hooks/template_include/
// https://developer.wordpress.org/reference/hooks/type_template/
// https://wordpress.stackexchange.com/questions/402354/how-to-overwrite-the-category-template-in-a-plugin
