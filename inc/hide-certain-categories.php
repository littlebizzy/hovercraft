<?php

function wpa_31553( $wp_query ) {

    //$wp_query is passed by reference.  we don't need to return anything. whatever changes made inside this function will automatically effect the global variable

    $excluded = array(12345,98765);  //made it an array in case you need to exclude more than one

    // only exclude on the front end
    if( !is_admin() ) {
        $wp_query->set('category__not_in', $excluded);
    }
}

// https://wordpress.stackexchange.com/questions/31553/is-there-a-quick-way-to-hide-category-from-everywhere
