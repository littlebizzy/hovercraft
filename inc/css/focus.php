<?php

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
