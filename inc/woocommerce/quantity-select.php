<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// woocommerce quantity select

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

add_filter( 'woocommerce_quantity_input', 'hovercraft_quantity_select', 10, 3 );

// replace simple quantity inputs with selects
function hovercraft_quantity_select( $html, $product, $args ) {
	if ( ! $product || ! is_a( $product, 'WC_Product' ) || $product->is_sold_individually() ) {
		return $html;
	}

	$min_value = isset( $args['min_value'] ) ? $args['min_value'] : 0;
	$max_value = isset( $args['max_value'] ) ? $args['max_value'] : '';
	$step = isset( $args['step'] ) ? $args['step'] : 1;
	$input_value = isset( $args['input_value'] ) ? $args['input_value'] : $min_value;

	if ( ! hovercraft_quantity_select_is_whole_number( $min_value ) || ! hovercraft_quantity_select_is_whole_number( $step ) || 1 !== absint( $step ) ) {
		return $html;
	}

	$min_value = absint( $min_value );
	$input_value = absint( $input_value );

	if ( '' === $max_value || false === $max_value || null === $max_value || -1 === intval( $max_value ) ) {
		$max_value = max( 10, $min_value, $input_value );
	} elseif ( ! hovercraft_quantity_select_is_whole_number( $max_value ) ) {
		return $html;
	} else {
		$max_value = absint( $max_value );
	}

	if ( $max_value < $min_value || $input_value > $max_value ) {
		return $html;
	}

	$max_value = min( $max_value, max( 20, $input_value ) );

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

// check if quantity values are simple whole numbers
function hovercraft_quantity_select_is_whole_number( $value ) {
	if ( '' === $value || false === $value || null === $value ) {
		return false;
	}

	return is_numeric( $value ) && floor( floatval( $value ) ) === floatval( $value );
}
