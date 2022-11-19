<?php

// all menu locations
function hovercraft_menu_locations() { 
	register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'cta-header-primary' => 'Header Primary CTA',
			'cta-header-secondary' => 'Header Secondary CTA',
			'cta-hero-primary' => 'Hero Primary CTA',
			'cta-hero-secondary' => 'Hero Secondary CTA',
        )
    ); 
}
add_action( 'init', 'hovercraft_menu_locations' );


// limit cta-header-primary to one link
add_filter( 'wp_nav_menu_objects', 'hovercraft_cta_header_primary_limit', 10, 2 );

function hovercraft_cta_header_primary_limit($items, $args) {
    if ( $args->theme_location == 'cta-header-primary' ) {
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

// limit cta-header-secondary to one link
add_filter( 'wp_nav_menu_objects', 'hovercraft_cta_header_secondary_limit', 10, 2 );

function hovercraft_cta_header_secondary_limit($items, $args) {
    if ( $args->theme_location == 'cta-header-secondary' ) {
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

// limit cta-hero-primary to one link
add_filter( 'wp_nav_menu_objects', 'hovercraft_cta_hero_primary_limit', 10, 2 );

function hovercraft_cta_hero_primary_limit($items, $args) {
    if ( $args->theme_location == 'cta-hero-primary' ) {
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

// limit cta-hero-secondary to one link
add_filter( 'wp_nav_menu_objects', 'hovercraft_cta_hero_secondary_limit', 10, 2 );

function hovercraft_cta_hero_secondary_limit($items, $args) {
    if ( $args->theme_location == 'cta-hero-secondary' ) {
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

// https://hollypryce.com/custom-menu-wordpress/
// https://www.isitwp.com/limit-amount-of-menu-items/
