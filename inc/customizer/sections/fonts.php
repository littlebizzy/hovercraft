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
require get_template_directory() . '/inc/customizer/sections/fonts/families.php';
require get_template_directory() . '/inc/customizer/sections/fonts/base.php';
require get_template_directory() . '/inc/customizer/sections/fonts/menus.php';
require get_template_directory() . '/inc/customizer/sections/fonts/content.php';
require get_template_directory() . '/inc/customizer/sections/fonts/headings.php';
require get_template_directory() . '/inc/customizer/sections/fonts/sidebar-footer.php';
