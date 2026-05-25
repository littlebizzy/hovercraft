<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register sidebar callout widget area
function hovercraft_sidebar_callout() {
	// get sidebar callout cta menu
	$hovercraft_sidebar_callout_menu = wp_nav_menu(
		array(
			'theme_location' => 'cta-sidebar-callout',
			'container_class' => 'cta-sidebar-callout',
			'menu_class' => 'cta',
			'fallback_cb' => false,
			'echo' => false,
		)
	);

	// get sidebar callout settings
	$hovercraft_sidebar_callout_settings = array(
		'name' => esc_html__( 'Sidebar Callout', 'hovercraft' ),
		'id' => 'hovercraft_callout',
		'before_widget' => '<div class="widget-callout widget-wrapper">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	);

	// append sidebar callout cta menu
	if ( ! empty( $hovercraft_sidebar_callout_menu ) ) {
		$hovercraft_sidebar_callout_settings['after_widget'] = ' ' . $hovercraft_sidebar_callout_menu . '</div>';
	}

	// register sidebar callout
	register_sidebar( $hovercraft_sidebar_callout_settings );
}
add_action( 'widgets_init', 'hovercraft_sidebar_callout' );
