<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for logo
?>

.site-logo {
	height: auto;
	display: inline-block;
}

@media screen and (max-width: 1199px) {
	.site-logo {
		width: <?php echo $mobile_logo_width; ?>px !important;
		max-width: <?php echo $mobile_logo_width; ?>px !important;
		margin-right: 10px;
	}
}

@media screen and (min-width: 1200px) {
	.site-logo {
		width: <?php echo $desktop_logo_width; ?>px !important;
		max-width: <?php echo $desktop_logo_width; ?>px !important;
		margin-right: 20px;
	}
}
