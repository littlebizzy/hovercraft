<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// fonts section
$wp_customize->add_section( 'hovercraft_fonts', array(
	'title' => 'Fonts',
	'priority' => 43,
) );

// font controls
require get_template_directory() . '/inc/customizer/fonts/font-families.php';
require get_template_directory() . '/inc/customizer/fonts/font-base.php';
require get_template_directory() . '/inc/customizer/fonts/font-menus.php';
require get_template_directory() . '/inc/customizer/fonts/font-content.php';
require get_template_directory() . '/inc/customizer/fonts/font-headings.php';
require get_template_directory() . '/inc/customizer/fonts/font-sidebar-footer.php';
