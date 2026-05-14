<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads media disable responsive images logic

add_filter( 'wp_calculate_image_srcset', '__return_false' );
