<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register sidebar callout widget area
function hovercraft_callout() {
	$menu_cta_sidebar_callout = wp_nav_menu(
		array(
			'theme_location' => 'cta-sidebar-callout',
			'container_class' => 'cta-sidebar-callout',
			'menu_class' => 'cta',
			'fallback_cb' => false,
			'echo' => false,
		)
	);

	$sidebar_callout_array = array(
		'name' => esc_html__( 'Sidebar Callout', 'hovercraft' ),
		'id' => 'hovercraft_callout',
		'before_widget' => '<div class="widget-callout widget-wrapper">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	);

	if ( ! empty( $menu_cta_sidebar_callout ) ) {
		$sidebar_callout_array['after_widget'] = ' ' . $menu_cta_sidebar_callout . '</div>';
	}

	register_sidebar( $sidebar_callout_array );
}
add_action( 'widgets_init', 'hovercraft_callout' );
