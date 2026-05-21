<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress navigation
?>

/* bbpress breadcrumb fallback style in case native plugin output leaks through */

.bbp-breadcrumb, div.bbp-breadcrumb, div.bbp-topic-tags, #bbp-topic-hot-tags, #bbpress-forums .bbp-breadcrumb, #bbpress-forums .bbp-breadcrumb p, #bbpress-forums div.bbp-topic-tags, #bbpress-forums div.bbp-topic-tags p {
	margin: 0 0 20px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

.bbp-breadcrumb a, div.bbp-breadcrumb a, div.bbp-topic-tags a, #bbp-topic-hot-tags a, #bbpress-forums .bbp-breadcrumb a {
	color: <?php echo $default_link_color; ?>;
}

#bbpress-forums div.bbp-topic-tags {
	clear: both;
}

/* pagination */

#bbpress-forums .bbp-pagination, #bbpress-forums .bbp-topic-pagination {
	clear: both;
	margin: 0 0 20px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-pagination {
	float: left;
	width: 100%;
}

#bbpress-forums .bbp-pagination-count {
	display: none;
	float: left;
}

#bbpress-forums .bbp-pagination-links {
	float: right;
	list-style: none;
	display: inline;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-pagination-links a, #bbpress-forums .bbp-pagination-links span.current, #bbpress-forums .bbp-pagination-links span.dots {
	display: block;
	float: left;
	padding: 4px 8px;
	margin-left: 5px;
	background: #ffffff;
	border: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
	text-decoration: none;
}

#bbpress-forums .bbp-pagination-links span.current, #bbpress-forums .bbp-pagination-links a:hover {
	background: <?php echo $search_bar_background_color; ?>;
}

#bbpress-forums .bbp-topic-pagination {
	display: inline-block;
	margin-left: 5px;
	margin-bottom: 2px;
}

#bbpress-forums .bbp-topic-pagination a, #bbpress-forums .bbp-topic-pagination span {
	display: inline-block;
	padding: 1px 4px;
	background: #ffffff;
	border: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	font-weight: 400;
	line-height: 1.5 !important;
	text-decoration: none;
}

/* search and notices */

#bbpress-forums .bbp-search-form, #bbpress-forums #bbp-search-form, div.bbp-search-form {
	clear: both;
	margin: 0 0 20px;
}

#bbpress-forums #bbp_search, #bbpress-forums .bbp-search-form input[type="text"], div.bbp-search-form input, div.bbp-search-form button {
	max-width: 100%;
}

#bbpress-forums .bbp-template-notice, #bbpress-forums .bbp-template-notice.info, #bbpress-forums .bbp-template-notice.warning, #bbpress-forums .bbp-template-notice.error, #bbpress-forums .bbp-template-notice.important, div.bbp-template-notice {
	display: none;
}

#bbpress-forums .bbp-alert-outer, #bbpress-forums .bbp-alert-inner, #bbpress-forums .bbp-alert-actions {
	background: #ffffff;
	border: 0;
	color: <?php echo $default_text_color; ?>;
}

