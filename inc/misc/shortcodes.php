<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render button shortcode
function hovercraft_button_shortcode( $atts, $content = '' ) {
	// get button shortcode attributes
	$hovercraft_button_atts = shortcode_atts(
		array(
			'url' => '#',
			'target' => '_self',
			'rel' => '',
			'class' => '',
			'style' => 'primary',
		),
		$atts,
		'hovercraft_button'
	);

	// get button target
	$hovercraft_allowed_targets = array( '_self', '_blank', '_parent', '_top' );
	$hovercraft_button_target = '_self';

	if ( in_array( $hovercraft_button_atts['target'], $hovercraft_allowed_targets, true ) ) {
		$hovercraft_button_target = $hovercraft_button_atts['target'];
	}

	// get button style class
	$hovercraft_button_style_class = 'button-primary';

	if ( 'secondary' === $hovercraft_button_atts['style'] ) {
		$hovercraft_button_style_class = 'button-secondary';
	}

	// get button class attribute
	$hovercraft_button_custom_class = sanitize_html_class( $hovercraft_button_atts['class'] );
	$hovercraft_button_class_attr = trim( $hovercraft_button_style_class . ' ' . $hovercraft_button_custom_class );

	// get button rel attribute
	$hovercraft_button_rel = sanitize_text_field( $hovercraft_button_atts['rel'] );

	if ( '_blank' === $hovercraft_button_target && empty( $hovercraft_button_rel ) ) {
		$hovercraft_button_rel = 'noopener noreferrer';
	}

	$hovercraft_button_rel_attr = '';

	if ( ! empty( $hovercraft_button_rel ) ) {
		$hovercraft_button_rel_attr = ' rel="' . esc_attr( $hovercraft_button_rel ) . '"';
	}

	// get button content
	$hovercraft_button_content = wp_kses_post( do_shortcode( $content ) );

	return '<a href="' . esc_url( $hovercraft_button_atts['url'] ) . '" target="' . esc_attr( $hovercraft_button_target ) . '" class="' . esc_attr( $hovercraft_button_class_attr ) . '"' . $hovercraft_button_rel_attr . '>' . $hovercraft_button_content . '</a>';
}
add_shortcode( 'button', 'hovercraft_button_shortcode' );
add_shortcode( 'hovercraft_button', 'hovercraft_button_shortcode' );
