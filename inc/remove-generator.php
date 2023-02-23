<?php

function hovercraft_remove_wp_generator() {
	return'';
}
add_filter( 'the_generator', 'hovercraft_remove_wp_generator' );

// https://www.wpbeginner.com/wp-tutorials/the-right-way-to-remove-wordpress-version-number/
// https://stackoverflow.com/questions/65613509/hiding-wordpress-version-using-wp-generator
// https://stackoverflow.com/questions/16335347/wordpress-how-do-i-remove-meta-generator-tags
