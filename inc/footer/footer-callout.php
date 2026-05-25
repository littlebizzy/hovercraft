<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register footer callout widget area
function hovercraft_register_footer_callout_widget_area() {
	$footer_callout_menu = wp_nav_menu(
		array(
			'theme_location' => 'cta-footer-callout',
			'container_class' => 'cta-footer-callout',
			'menu_class' => 'cta',
			'fallback_cb' => false,
			'echo' => false,
		)
	);

	$footer_callout_widget_args = array(
		'name' => esc_html__( 'Footer Callout', 'hovercraft' ),
		'id' => 'hovercraft_footer_callout',
		'before_widget' => '<div class="widget-footer-callout widget-wrapper">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	);

	if ( ! empty( $footer_callout_menu ) ) {
		$footer_callout_widget_args['after_widget'] = ' ' . $footer_callout_menu . '</div>';
	}

	register_sidebar( $footer_callout_widget_args );
}
add_action( 'widgets_init', 'hovercraft_register_footer_callout_widget_area' );