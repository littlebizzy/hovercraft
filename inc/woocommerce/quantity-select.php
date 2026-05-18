<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// woocommerce quantity select

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

add_filter( 'woocommerce_quantity_input', 'hovercraft_quantity_select', 10, 3 );

// replace quantity inputs with selects
function hovercraft_quantity_select( $html, $product, $args ) {
	$min_value = isset( $args['min_value'] ) && is_numeric( $args['min_value'] ) ? absint( $args['min_value'] ) : 1;
	$max_value = isset( $args['max_value'] ) && is_numeric( $args['max_value'] ) ? absint( $args['max_value'] ) : 20;
	$input_value = isset( $args['input_value'] ) && is_numeric( $args['input_value'] ) ? absint( $args['input_value'] ) : $min_value;

	if ( 1 > $min_value ) {
		$min_value = 1;
	}

	if ( 1 > $input_value ) {
		$input_value = $min_value;
	}

	if ( 1 > $max_value ) {
		$max_value = 20;
	}

	$max_value = min( $max_value, max( 20, $input_value ) );
	$max_value = max( $max_value, $min_value, $input_value );

	$classes = isset( $args['classes'] ) && is_array( $args['classes'] ) ? $args['classes'] : array();
	$classes[] = 'qty';
	$classes[] = 'hovercraft-quantity-select';
	$classes = array_unique( array_filter( $classes ) );

	$input_id = isset( $args['input_id'] ) ? $args['input_id'] : uniqid( 'quantity_' );
	$input_name = isset( $args['input_name'] ) ? $args['input_name'] : 'quantity';

	$output = '<select id="' . esc_attr( $input_id ) . '" class="' . esc_attr( implode( ' ', $classes ) ) . '" name="' . esc_attr( $input_name ) . '" title="' . esc_attr__( 'Qty', 'hovercraft' ) . '">';

	for ( $quantity = $min_value; $quantity <= $max_value; $quantity++ ) {
		$output .= '<option value="' . esc_attr( $quantity ) . '"' . selected( $quantity, $input_value, false ) . '>' . esc_html( $quantity ) . '</option>';
	}

	$output .= '</select>';

	return $output;
}
