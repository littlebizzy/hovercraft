<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register footer callout widget area
function hovercraft_footer_callout() {
	$menu_cta_footer_callout = wp_nav_menu(
		array(
			'theme_location' => 'cta-footer-callout',
			'container_class' => 'cta-footer-callout',
			'menu_class' => 'cta',
			'fallback_cb' => false,
			'echo' => false,
		)
	);

	$footer_callout_array = array(
		'name' => esc_html__( 'Footer Callout', 'hovercraft' ),
		'id' => 'hovercraft_footer_callout',
		'before_widget' => '<div class="widget-footer-callout widget-wrapper">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	);

	if ( ! empty( $menu_cta_footer_callout ) ) {
		$footer_callout_array['after_widget'] = ' ' . $menu_cta_footer_callout . '</div>';
	}

	register_sidebar( $footer_callout_array );
}
add_action( 'widgets_init', 'hovercraft_footer_callout' );
