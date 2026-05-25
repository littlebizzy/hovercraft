<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for logo
?>

.site-logo {
	display: block;
	height: auto;
}

@media screen and (max-width: 1199px) {
	.site-logo {
		width: <?php echo $mobile_logo_width; ?>px !important;
		max-width: <?php echo $mobile_logo_width; ?>px !important;
	}
}

@media screen and (min-width: 1200px) {
	.site-logo {
		width: <?php echo $desktop_logo_width; ?>px !important;
		max-width: <?php echo $desktop_logo_width; ?>px !important;
	}
}
