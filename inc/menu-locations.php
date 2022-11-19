<?php

// register header menu
function hovercraft_main_menu() {
	register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'hovercraft_main_menu' );



// register header cta menu
function hovercraft_cta_header() {
	register_nav_menu('cta-header',__( 'Header CTA' ));
}
add_action( 'init', 'hovercraft_cta_header' );

// menu splash cta major
function hovercraft_cta_splash_major() {
	register_nav_menu('cta-splash-major',__( 'Splash CTA (Major)' ));
}
add_action( 'init', 'hovercraft_cta_splash_major' );

// menu splash cta minor
function hovercraft_cta_splash_minor() {
	register_nav_menu('cta-splash-minor',__( 'Splash CTA (Minor)' ));
}
add_action( 'init', 'hovercraft_cta_splash_minor' );


// llimit header cta to single item
// https://www.isitwp.com/limit-amount-of-menu-items/
add_filter( 'wp_nav_menu_objects', 'hovercraft_header_cta_limit', 10, 2 );

function hovercraft_header_cta_limit($items, $args) {
    // want our MAINMENU to have MAX of 7 items
    if ( $args->theme_location == 'cta-header' ) {
        $toplinks = 0;
        foreach ( $items as $k => $v ) {
            if ( $v->menu_item_parent == 0 ) {
                // count how many top-level links we have so far...
                $toplinks++;
            }
            // if we've passed our max # ...
            if ( $toplinks > 1 ) {
                unset($items[$k]);
            }
        }
    }
    return $items;
}

