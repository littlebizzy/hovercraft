<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads header remove generator logic

function hovercraft_remove_wp_generator() {
	return '';
}
add_filter( 'the_generator', 'hovercraft_remove_wp_generator' );
