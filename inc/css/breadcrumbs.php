<?php
// styles for breadcrumbs
?>

/* breadcrumbs */

@media screen and (max-width: 1200px) {
.breadcrumbs {
	width: 100%;
	margin-bottom: 20px;
	font-size: 14px;
	line-height: 18px !important;
	color: <?php echo $breadcrumbs_text_color; ?>;
	white-space: normal;
	}
}

@media screen and (min-width: 1200px) {
.breadcrumbs {
	margin-bottom: 30px;
	font-size: 14px;
	line-height: 20px !important;
	color: <?php echo $breadcrumbs_text_color; ?>;
	white-space: normal;
	}
}

.breadcrumbs ul {
	display: inline;
	list-style-position: unset;
	margin-left: 0 !important;
}

.breadcrumbs ul li {
	display: inline;
	word-break: break-all;
	margin-right: 5px;
}

.breadcrumbs i {
	font-size: 18px !important;
	margin-right: 5px;
}

.breadcrumbs a {
	color: <?php echo $breadcrumbs_link_color; ?>;
}
