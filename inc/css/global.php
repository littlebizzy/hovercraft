<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for global styles
?>

html, body {
	height: 100%;
	font-family: <?php echo hovercraft_format_css_font_family( $default_font_family, $first_font_family ); ?>;
	line-height: 1.5;
	color: <?php echo $default_text_color; ?>;
	scroll-behavior: smooth;
}

@media screen and (max-width: 1199px) {
	html, body {
		font-size: <?php echo $default_mobile_font_size; ?>px;
	}
}

@media screen and (min-width: 1200px) {
	html, body {
		font-size: <?php echo $default_desktop_font_size; ?>px;
	}
}

/* body frozen (triggered by offcanvas menu js) */

body.frozen {
	overflow: hidden;
}

/* misc */

strong {
	font-weight: 700;
}

em {
	font-style: italic;
}

/* paragraphs */

@media screen and (max-width: 1199px) {
	p {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	p {
		margin-bottom: 30px;
	}
}

.clear {
	clear: both;
}

/* general */

#container {
	width: 100%;
	height: 100%;
}

@media screen and (max-width: 1199px) {
	#container {
		position: relative; /* required for mobile menu transform */
		transform: translate3d(0, 0, 0);
		transition: transform 0.5s;
	}
}

.inner {
	width: 100%;
	max-width: 1200px;
	margin: 0 auto;
}

.full {
	max-width: 100%;
}

@media screen and (max-width: 1199px) {
	.full {
		padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
	.full {
		padding: 0 40px;
	}
}

/* wordpress */

.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.alignleft {
	display: inline;
	float: left;
}

.alignright {
	display: inline;
	float: right;
}

.wp-caption {
	max-width: 100%;
}

.wp-caption-text {
	text-align: center;
}

.screen-reader-text {
	clip: rect(1px, 1px, 1px, 1px);
	position: absolute !important;
	height: 1px;
	width: 1px;
	overflow: hidden;
}

@media screen and (max-width: 1199px) {
	.mejs-container {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.mejs-container {
		margin-bottom: 30px;
	}
}

iframe {
	position: relative;
	display: block;
}

hr {
	background: <?php echo $default_text_color; ?>;
	height: 1px;
}

@media screen and (max-width: 1199px) {
	hr {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	hr {
		margin-bottom: 30px;
	}
}

#footer iframe {
	aspect-ratio: 1 / 1.5;
}
