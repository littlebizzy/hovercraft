<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads misc custom post test logic

function hovercraft_is_custom_post_type( $post = null ) {
	$all_custom_post_types = get_post_types( array( '_builtin' => false ) );

	if ( empty( $all_custom_post_types ) ) {
		return false;
	}

	$custom_types = array_keys( $all_custom_post_types );
	$current_post_type = get_post_type( $post );

	if ( ! $current_post_type ) {
		return false;
	}

	return in_array( $current_post_type, $custom_types, true );
}
