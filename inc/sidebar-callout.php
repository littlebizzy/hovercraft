<?php

if ( has_nav_menu( 'cta-sidebar-callout' ) ) {
    // User has assigned menu to this location;
    // https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    wp_nav_menu( array( 
    'theme_location' => 'cta-sidebar-callout', 
    'menu_class' => 'cta', 
    'container_class' => 'cta-sidebar-callout'
    ) );
}

// https://stackoverflow.com/questions/17577861/wordpress-insert-html-or-custom-function-into-a-dynamic-sidebarmy-sidebar
