<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render quantity select from shared helper
if ( function_exists( 'hovercraft_get_woocommerce_quantity_select' ) ) {
	echo hovercraft_get_woocommerce_quantity_select( array(
		'min_value' => isset( $min_value ) ? $min_value : 1,
		'max_value' => isset( $max_value ) ? $max_value : 0,
		'input_value' => isset( $input_value ) ? $input_value : 1,
		'step' => isset( $step ) ? $step : 1,
		'input_id' => isset( $input_id ) ? $input_id : uniqid( 'quantity_' ),
		'input_name' => isset( $input_name ) ? $input_name : 'quantity',
		'classes' => isset( $classes ) && is_array( $classes ) ? $classes : array(),
	) );
}
