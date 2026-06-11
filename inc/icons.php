<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render local svg icon
function hovercraft_icon( $icon_name ) {
	$icons = array(
		'arrow-down'   => 'arrow-down.svg',
		'chevron-down' => 'chevron-down.svg',
		'chevron-right' => 'chevron-right.svg',
		'menu'         => 'menu.svg',
		'search'       => 'search.svg',
	);

	if ( empty( $icons[ $icon_name ] ) ) {
		return '';
	}

	$icon_path = get_template_directory() . '/inc/icons/' . $icons[ $icon_name ];

	if ( ! file_exists( $icon_path ) || ! is_readable( $icon_path ) ) {
		return '';
	}

	$svg = file_get_contents( $icon_path );

	if ( false === $svg ) {
		return '';
	}

	$svg = str_replace( 'fill="#1f1f1f"', 'fill="currentColor"', $svg );
	$svg = preg_replace( '/<svg\s+/', '<svg class="hovercraft-icon hovercraft-icon-' . esc_attr( $icon_name ) . '" aria-hidden="true" focusable="false" ', $svg, 1 );

	return $svg;
}
