<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for breadcrumbs
?>

/* breadcrumbs */

.breadcrumbs {
	clear: both;
	width: 100%;
	padding: 0;
	color: <?php echo $breadcrumbs_text_color; ?>;
	font-size: 14px;
	white-space: normal;
}

@media screen and (max-width: 1199px) {
	.breadcrumbs {
		margin: 0 0 20px;
		font-size: 12px;
		line-height: 18px !important;
	}
}

@media screen and (min-width: 1200px) {
	.breadcrumbs {
		margin: 0 0 30px;
		line-height: 20px !important;
	}
}

.breadcrumbs ul {
	display: inline;
	margin: 0 !important;
	padding: 0 !important;
	list-style: none;
	list-style-position: unset;
}

.breadcrumbs ul li {
	display: inline;
	margin: 0 5px 0 0;
	padding: 0;
	word-break: break-word;
}

.breadcrumbs ul li:last-child {
	margin-right: 0;
}

.breadcrumbs i {
	font-size: 18px !important;
	margin-right: 5px;
}

.breadcrumbs a {
	color: <?php echo $breadcrumbs_link_color; ?>;
}

.breadcrumbs a:hover {
	color: <?php echo $default_hover_color; ?>;
}
