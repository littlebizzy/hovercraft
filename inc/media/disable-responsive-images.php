<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable responsive image output
add_filter( 'wp_calculate_image_srcset', '__return_false' );