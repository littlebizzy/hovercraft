<?php
// styles for code snippets
?>

code {
	font-family: 'Noto Sans Mono', monospace;
	font-weight: 400;
	background: #ECEFF1;
	padding: 0px 5px;
}

@media screen and (max-width: 1200px) {
pre {
	width: calc(100% - 40px) !important;
	font-family: 'Noto Sans Mono', monospace;
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
	font-family: 'Noto Sans Mono', monospace;
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
	font-family: 'Noto Sans Mono', monospace;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
}
