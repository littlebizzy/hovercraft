<?php
// styles for featured images
?>

/* featured image wrapper */

@media screen and (max-width: 1200px) {
.featured-image-wrapper {
	position: relative;
	margin-bottom: 20px;
	width: 100%;
	height: auto;
	}
}

@media screen and (min-width: 1200px) {
.featured-image-wrapper {
	position: relative;
	margin-bottom: 30px;
	width: 768px;
	height: auto;
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

@media screen and (max-width: 1200px) {
img.featured-image {
	width: 100%;
	height: auto;
	display: block;
	margin-bottom: 0;
	}
}

@media screen and (min-width: 1200px) {
img.featured-image {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "width: 768px;\n"; 
		} else { 
			echo "width: 768px;\n"; 
		}  ?>
	height: auto;
	display: block;
	margin-bottom: 0;
	}
}
	
.featured-image-caption {
	position: absolute;
	font-size: 12px;
	bottom: 0px;
	color: #ffffff;
	padding: 5px 10px;
	right: 0px;
}
