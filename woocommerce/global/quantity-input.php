<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$min_value = isset( $min_value ) && is_numeric( $min_value ) ? intval( $min_value ) : 1;
$max_value = isset( $max_value ) && is_numeric( $max_value ) ? intval( $max_value ) : 0;
$input_value = isset( $input_value ) && is_numeric( $input_value ) ? intval( $input_value ) : $min_value;
$step = isset( $step ) && is_numeric( $step ) ? absint( $step ) : 1;
$input_id = isset( $input_id ) && $input_id ? $input_id : uniqid( 'quantity_' );
$input_name = isset( $input_name ) && $input_name ? $input_name : 'quantity';
$classes = isset( $classes ) && is_array( $classes ) ? $classes : array();

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
?>
<select id="<?php echo esc_attr( $input_id ); ?>" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" name="<?php echo esc_attr( $input_name ); ?>" title="<?php echo esc_attr__( 'Qty', 'hovercraft' ); ?>">
	<?php foreach ( $quantities as $quantity ) : ?>
		<option value="<?php echo esc_attr( $quantity ); ?>" <?php selected( $quantity, $input_value ); ?>><?php echo esc_html( $quantity ); ?></option>
	<?php endforeach; ?>
</select>
