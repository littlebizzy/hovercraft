<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register simplified button shortcode
function hovercraft_button_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts(
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

	$allowed_targets = array( '_self', '_blank', '_parent', '_top' );
	$target = '_self';

	if ( in_array( $atts['target'], $allowed_targets, true ) ) {
		$target = $atts['target'];
	}

	$style_class = 'button-primary';

	if ( 'secondary' === $atts['style'] ) {
		$style_class = 'button-secondary';
	}
	$custom_class = sanitize_html_class( $atts['class'] );
	$class_attr = trim( $style_class . ' ' . $custom_class );
	$rel = sanitize_text_field( $atts['rel'] );

	if ( '_blank' === $target && empty( $rel ) ) {
		$rel = 'noopener noreferrer';
	}

	$rel_attr = '';

	if ( $rel ) {
		$rel_attr = ' rel="' . esc_attr( $rel ) . '"';
	}
	$button_content = wp_kses_post( do_shortcode( $content ) );

	return '<a href="' . esc_url( $atts['url'] ) . '" target="' . esc_attr( $target ) . '" class="' . esc_attr( $class_attr ) . '"' . $rel_attr . '>' . $button_content . '</a>';
}
add_shortcode( 'button', 'hovercraft_button_shortcode' );
add_shortcode( 'hovercraft_button', 'hovercraft_button_shortcode' );

