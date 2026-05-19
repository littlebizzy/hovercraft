<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for secondary button styles
?>

/* inline button: secondary */
a.button-secondary {
	font-family: <?php echo hovercraft_format_css_font_family( $main_menu_font_family, $default_font_family ); ?>;
	font-size: 20px;
	font-weight: 400;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: transparent;
	border-radius: 4px;
	text-decoration: none;
	color: <?php echo $default_text_color; ?>;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	width: 100%;
	box-sizing: border-box;
}

a.button-secondary:hover {
	background: <?php echo $default_text_color; ?>;
	color: #ffffff !important;
}
