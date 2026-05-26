<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for code snippets
?>

/* code snippets */

code,
pre,
.pre {
	font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace;
	font-weight: 400;
	color: <?php echo $default_text_color; ?>;
	user-select: text;
}

code {
	padding: 2px 5px;
	background: <?php echo $search_bar_background_color; ?>;
	border-radius: 4px;
}

pre,
.pre {
	width: 100%;
	padding: 16px 20px;
	margin-bottom: 30px;
	background: <?php echo $search_bar_background_color; ?>;
	border-radius: 8px;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	overflow-x: auto;
	overflow-y: hidden;
	white-space: pre;
}

pre:has(> code) {
	padding: 0;
	overflow: hidden;
}

pre code,
.pre code {
	padding: 0;
	background: transparent;
	border-radius: 0;
	box-shadow: none;
}

pre > code {
	display: block;
	padding: 16px 20px;
	overflow-x: auto;
	overflow-y: hidden;
	white-space: pre;
}

@media screen and (max-width: 1199px) {
	pre,
	.pre {
		max-width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	pre,
	.pre {
		max-width: 100%;
	}
}
