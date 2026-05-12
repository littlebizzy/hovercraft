<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_remove_wp_generator() {
	return '';
}
add_filter( 'the_generator', 'hovercraft_remove_wp_generator' );
