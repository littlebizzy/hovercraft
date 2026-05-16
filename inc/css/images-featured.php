<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for featured images
?>

/* featured image wrapper */

.featured-image-wrapper {
	position: relative;
	height: auto;
}

@media screen and (max-width: 1199px) {
	.featured-image-wrapper {
		margin-bottom: 20px;
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	.featured-image-wrapper {
		margin-bottom: 30px;
		width: 768px;
		<?php if ( $sitewide_layout == 'floating_islands' ) {

			if ( $featured_image_position == 'below_title' ) {
				echo "margin-left: -40px;\n";
			} elseif ( $featured_image_position == 'above_title' ) {
				echo "margin-left: 0;\n";
			}

		} elseif ( $sitewide_layout == 'classic_clean' ) {

			if ( $featured_image_position == 'below_title' ) {
				echo "margin-left: 0;\n";
			} elseif ( $featured_image_position == 'above_title' ) {
				echo "margin-left: 0;\n";
			}

		} ?>
	}
}

/* featured images */

.featured-image-wrapper img {
	margin-bottom: 0 !important;
}

img.featured-image {
	height: auto;
	display: block;
	margin-bottom: 0;
}

@media screen and (max-width: 1199px) {
	img.featured-image {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	img.featured-image {
		<?php if ( $sitewide_layout == 'floating_islands' ) {
			echo "width: 768px;\n";
		} else {
			echo "width: 768px;\n";
		} ?>
	}
}

.featured-image-caption {
	position: absolute;
	font-size: 12px;
	bottom: 0;
	color: #ffffff;
	padding: 5px 10px;
	right: 0;
}
