<?php

// Footer Callout widget area is a different colored widget in the footer

function hovercraft_footer_callout() {
  
$menu_cta_footer_callout = wp_nav_menu( array( 
    'theme_location' => 'cta-footer-callout',
	  'container_class' => 'cta-footer-callout',
    'menu_class' => 'cta',
	'echo' => false
	)
);

$menu_populated_cta_footer_callout = wp_nav_menu( array(
	'theme_location' => 'cta-footer-callout',
    'container_class' => 'cta-footer-callout',
    'menu_class'     => 'cta',
    'fallback_cb'    => false,
    'echo'           => false
    )
);
	
if ( $menu_populated_cta_footer_callout ) {
	$footer_callout_array = array(
	'name'          => 'Footer Callout',
	'id'            => 'hovercraft_footer_callout',
	'before_widget' => '<div class="widget-footer-callout widget-wrapper">',
	'after_widget'  => ' '. $menu_cta_footer_callout .'</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
	);
} else {
	$footer_callout_array = array(
	'name'          => 'Footer Callout',
	'id'            => 'hovercraft_footer_callout',
	'before_widget' => '<div class="widget-footer-callout widget-wrapper">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
	);
};
	
register_sidebar($footer_callout_array);
}

add_action( 'widgets_init', 'hovercraft_footer_callout' );

// https://stackoverflow.com/questions/17577861/wordpress-insert-html-or-custom-function-into-a-dynamic-sidebarmy-sidebar
// https://support.advancedcustomfields.com/forums/topic/add-field-to-before_widget-in-functions-php/
// https://samhermes.com/posts/caching-menu-in-transient-in-wordpress/
// https://wordpress.stackexchange.com/questions/185814/if-test-for-has-nav-menu-does-not-return-echo-when-no-menu-exists
// https://wordpress.stackexchange.com/questions/425726/only-display-nav-menu-if-it-is-populated-with-menu-items
