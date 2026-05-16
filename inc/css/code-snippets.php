<?php

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
}

code {
	padding: 2px 5px;
	background: <?php echo $search_bar_background_color; ?>;
}

pre,
.pre {
	width: 100%;
	padding: 16px 20px;
	margin-bottom: 30px;
	background: <?php echo $search_bar_background_color; ?>;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	overflow-x: auto;
	white-space: pre;
}

pre code,
.pre code {
	padding: 0;
	background: transparent;
	box-shadow: none;
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
