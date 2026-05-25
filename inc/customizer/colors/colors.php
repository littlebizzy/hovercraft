<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// load color controls
require get_template_directory() . '/inc/customizer/colors/color-base.php';
require get_template_directory() . '/inc/customizer/colors/color-header-hero.php';
require get_template_directory() . '/inc/customizer/colors/color-content-widgets.php';
require get_template_directory() . '/inc/customizer/colors/color-widget-bands.php';
require get_template_directory() . '/inc/customizer/colors/color-footer.php';
