<?php

function wpa_31553( $wp_query ) {

    //$wp_query is passed by reference.  we don't need to return anything. whatever changes made inside this function will automatically effect the global variable

	$portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' ); // depends on inc/categories-array.php
	$port_cat_id = get_cat_ID($portal_category);
	
	$bullets_category = get_theme_mod( 'hovercraft_bullets_category', 'none' ); // depends on inc/categories-array.php
	$bull_cat_id = get_cat_ID($bullets_category);
	
    $excluded = array($port_cat_id,$bull_cat_id);  //made it an array in case you need to exclude more than one

    // only exclude on the front end
    if( !is_admin() ) {
        $wp_query->set('category__not_in', $excluded);
    }
}

add_action('pre_get_posts', 'wpa_31553' );

// https://wordpress.stackexchange.com/questions/31553/is-there-a-quick-way-to-hide-category-from-everywhere
