<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for focus states
?>

/* focus states */

a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible, textarea:focus-visible, summary:focus-visible, [tabindex]:focus-visible {
	outline: 2px solid <?php echo $default_link_color; ?> !important;
	outline-offset: 2px;
}

input:focus-visible, select:focus-visible, textarea:focus-visible {
	box-shadow: inset 0 0 0 1px <?php echo $default_link_color; ?> !important;
}

.skip-link:focus,
.skip-link:focus-visible {
	clip: auto;
	position: fixed !important;
	top: 10px;
	left: 10px;
	z-index: 999999;
	width: auto;
	height: auto;
	padding: 10px 15px;
	overflow: visible;
	background: <?php echo $content_background_color; ?>;
	color: <?php echo $default_link_color; ?>;
	box-shadow: 0 0 0 2px <?php echo $default_link_color; ?>;
	text-decoration: none;
}
