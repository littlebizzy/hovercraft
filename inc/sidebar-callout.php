<?php

// sidebar callout

function hovercraft_callout() {
	
$callout_menu = wp_nav_menu( array( 
    'theme_location' => 'cta-sidebar-callout', 
    'menu_class' => 'cta', 
    'container_class' => 'cta-sidebar-callout',
	 'echo' => false,
    ) );
	
$after_widget_callout = ' '. $callout_menu . '</div>';
	
	$callout_array = array(
		'name'          => 'Callout',
		'id'            => 'hovercraft_callout',
		'before_widget' => '<div class="widget-callout widget-wrapper">',
		'after_widget'  => $after_widget_callout,
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		);

// $callout_array['after_widget'] = '" ' . $callout_menu . ' </div>"';
	//		'before_widget' => '<div style="background-image: url(' . $backgroundimage['url'] . ');">',

register_sidebar($callout_array);
}

add_action( 'widgets_init', 'hovercraft_callout' );

// https://stackoverflow.com/questions/17577861/wordpress-insert-html-or-custom-function-into-a-dynamic-sidebarmy-sidebar
// https://support.advancedcustomfields.com/forums/topic/add-field-to-before_widget-in-functions-php/
// https://samhermes.com/posts/caching-menu-in-transient-in-wordpress/
