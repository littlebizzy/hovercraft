<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wp_calculate_image_srcset', '__return_false' );
