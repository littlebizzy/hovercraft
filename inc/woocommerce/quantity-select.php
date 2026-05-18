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
	$min_value = isset( $args['min_value'] ) && is_numeric( $args['min_value'] ) ? intval( $args['min_value'] ) : 1;
	$max_value = isset( $args['max_value'] ) && is_numeric( $args['max_value'] ) ? intval( $args['max_value'] ) : 0;
	$input_value = isset( $args['input_value'] ) && is_numeric( $args['input_value'] ) ? intval( $args['input_value'] ) : $min_value;
	$step = isset( $args['step'] ) && is_numeric( $args['step'] ) ? absint( $args['step'] ) : 1;

	if ( 1 > $min_value ) {
		$min_value = 1;
	}

	if ( 1 > $input_value ) {
		$input_value = $min_value;
	}

	if ( 1 > $step ) {
		$step = 1;
	}

	if ( $max_value < $min_value ) {
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
	$quantities = array();

	for ( $quantity = $min_value; $quantity <= $max_value; $quantity += $step ) {
		$quantities[] = $quantity;
	}

	$quantities[] = $input_value;
	$quantities = array_unique( array_filter( array_map( 'absint', $quantities ) ) );
	sort( $quantities, SORT_NUMERIC );

	$output = '<select id="' . esc_attr( $input_id ) . '" class="' . esc_attr( implode( ' ', $classes ) ) . '" name="' . esc_attr( $input_name ) . '" title="' . esc_attr__( 'Qty', 'hovercraft' ) . '">';

	foreach ( $quantities as $quantity ) {
		$output .= '<option value="' . esc_attr( $quantity ) . '"' . selected( $quantity, $input_value, false ) . '>' . esc_html( $quantity ) . '</option>';
	}

	$output .= '</select>';

	return $output;
}
