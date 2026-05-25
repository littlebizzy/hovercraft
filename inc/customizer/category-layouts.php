<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// category layouts section
$wp_customize->add_section( 'hovercraft_category_layouts', array(
	'title' => 'Category Layouts',
	'priority' => 34,
) );
