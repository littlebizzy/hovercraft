<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for alignment styles
?>

/* alignment */
	
.aligncenter {
	text-align: center;
	margin: 0 auto;
	display: block;
}
	
.alignleft {
	text-align: left;
	display: inline-block;
}

.alignright {
	text-align: right;
	display: inline-block;
}

/* archives */
<?php
$hovercraft_archives_css = get_template_directory() . '/inc/css/archives.php';
if ( file_exists( $hovercraft_archives_css ) ) {
	include $hovercraft_archives_css;
}
?>
