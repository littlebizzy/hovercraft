<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for images (general)
?>

/* images */
	
.alignright { 
	float: right; 
	margin: 0 0 20px 20px; 
}

.alignleft { 
	float: left; 
	margin: 0 20px 20px 0; 
}

.aligncenter { 
	display: block; 
	margin-left: auto; 
	margin-right: auto; 
}

/* images featured */
<?php
$hovercraft_images_featured_css = get_template_directory() . '/inc/css/images-featured.php';
if ( file_exists( $hovercraft_images_featured_css ) ) {
	include $hovercraft_images_featured_css;
}
?>
