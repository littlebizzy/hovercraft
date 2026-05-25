<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if woocommerce is inactive
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// render quantity select markup
function hovercraft_get_woocommerce_quantity_select( $args = array() ) {
	$min_value = isset( $args['min_value'] ) && is_numeric( $args['min_value'] ) ? intval( $args['min_value'] ) : 1;
	$max_value = isset( $args['max_value'] ) && is_numeric( $args['max_value'] ) ? intval( $args['max_value'] ) : 0;
	$input_value = isset( $args['input_value'] ) && is_numeric( $args['input_value'] ) ? intval( $args['input_value'] ) : $min_value;
	$step = isset( $args['step'] ) && is_numeric( $args['step'] ) ? absint( $args['step'] ) : 1;
	$input_id = isset( $args['input_id'] ) && $args['input_id'] ? $args['input_id'] : uniqid( 'quantity_' );
	$input_name = isset( $args['input_name'] ) && $args['input_name'] ? $args['input_name'] : 'quantity';
	$classes = isset( $args['classes'] ) && is_array( $args['classes'] ) ? $args['classes'] : array();

	// force sane minimum quantity
	if ( 1 > $min_value ) {
		$min_value = 1;
	}

	// force sane selected quantity
	if ( 1 > $input_value ) {
		$input_value = $min_value;
	}

	// force sane quantity step
	if ( 1 > $step ) {
		$step = 1;
	}

	// use a small default maximum for unlimited products
	if ( $max_value < $min_value ) {
		$max_value = 10;
	}

	$max_value = min( $max_value, max( 10, $input_value ) );
	$max_value = max( $max_value, $min_value, $input_value );
	$classes[] = 'qty';
	$classes[] = 'hovercraft-quantity-select';
	$classes = array_unique( array_filter( $classes ) );
	$quantities = array();

	for ( $quantity = $min_value; $quantity <= $max_value; $quantity += $step ) {
		$quantities[] = $quantity;
	}

	$quantities[] = $input_value;
	$quantities = array_unique( array_filter( array_map( 'absint', $quantities ) ) );
	sort( $quantities, SORT_NUMERIC );

	$output = '<div class="quantity">';
	$output .= '<label class="screen-reader-text" for="' . esc_attr( $input_id ) . '">' . esc_html__( 'Quantity', 'hovercraft' ) . '</label>';
	$output .= '<select id="' . esc_attr( $input_id ) . '" class="' . esc_attr( implode( ' ', $classes ) ) . '" name="' . esc_attr( $input_name ) . '" title="' . esc_attr__( 'Qty', 'hovercraft' ) . '">';

	foreach ( $quantities as $quantity ) {
		$output .= '<option value="' . esc_attr( $quantity ) . '"' . selected( $quantity, $input_value, false ) . '>' . esc_html( $quantity ) . '</option>';
	}

	$output .= '</select>';
	$output .= '</div>';

	return $output;
}

// replace quantity inputs with select fields
function hovercraft_replace_woocommerce_quantity_input_with_select( $html, $args, $product ) {
	return hovercraft_get_woocommerce_quantity_select( $args );
}
add_filter( 'woocommerce_quantity_input', 'hovercraft_replace_woocommerce_quantity_input_with_select', 999, 3 );
