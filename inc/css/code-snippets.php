<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for code snippets
?>

code {
	font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace;
	font-weight: 400;
	background: #ECEFF1;
	padding: 0 5px;
}

@media screen and (max-width: 1199px) {
pre {
	width: calc(100% - 40px) !important;
	font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace;
	font-weight: 400;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
pre {
	width: 100%;
	font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace;
	font-weight: 400;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
	}
}

.pre {
	width: 100%;
	font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
}
