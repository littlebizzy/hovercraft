<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// css custom properties
?>

/* design tokens */

:root {
	--hovercraft-default-text-color: <?php echo $default_text_color; ?>;
	--hovercraft-default-link-color: <?php echo $default_link_color; ?>;
	--hovercraft-default-hover-color: <?php echo $default_hover_color; ?>;
	--hovercraft-main-background-color: <?php echo $main_background_color; ?>;
	--hovercraft-content-background-color: <?php echo $content_background_color; ?>;
	--hovercraft-sidebar-widget-background-color: <?php echo $sidebar_widget_background_color; ?>;
	--hovercraft-sidebar-widget-text-color: <?php echo $sidebar_widget_text_color; ?>;
	--hovercraft-sidebar-widget-link-color: <?php echo $sidebar_widget_link_color; ?>;
	--hovercraft-sidebar-widget-border-color: <?php echo $sidebar_widget_border_color; ?>;
	--hovercraft-sidebar-left-border-color: <?php echo $sidebar_left_border_color; ?>;
	--hovercraft-layout-width: 1200px;
	--hovercraft-primary-width: 768px;
	--hovercraft-sidebar-width: 392px;
	--hovercraft-layout-gap: 40px;
	--hovercraft-radius-sm: 4px;
	--hovercraft-radius-md: 8px;
}
