<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for tags
?>

.tags {
	font-size: 14px;
	color: <?php echo $breadcrumbs_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	.tags {
		margin-top: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.tags {
		margin-top: 30px;
	}
}
