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
require get_template_directory() . '/inc/customizer/fonts/families.php';
require get_template_directory() . '/inc/customizer/fonts/base.php';
require get_template_directory() . '/inc/customizer/fonts/menus.php';
require get_template_directory() . '/inc/customizer/fonts/content.php';
require get_template_directory() . '/inc/customizer/fonts/headings.php';
require get_template_directory() . '/inc/customizer/fonts/sidebar-footer.php';
