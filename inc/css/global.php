<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for global styles
?>

@media screen and (max-width: 1200px) {
html, body {
    height: 100%;
    font-family: <?php echo hovercraft_format_css_font_family( $default_font_family, $first_font_family ); ?>;
    font-size: <?php echo $default_mobile_font_size; ?>px;
    line-height: 1.5;
    color: <?php echo $default_text_color; ?>;
    scroll-behavior: smooth;
    }
}

@media screen and (min-width: 1200px) {
html, body {
    height: 100%;
    font-family: <?php echo hovercraft_format_css_font_family( $default_font_family, $first_font_family ); ?>;
    font-size: <?php echo $default_desktop_font_size; ?>px;
    line-height: 1.5;
    color: <?php echo $default_text_color; ?>;
    scroll-behavior: smooth;
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

@media screen and (max-width: 1200px) {
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

@media screen and (max-width: 1200px) {
#container {
	width: 100%;
	height: 100%;
	position: relative; /* required for mobile menu transform */
	transform: translate3d(0, 0, 0);
  	transition: transform 0.5s;
	}
}

@media screen and (min-width: 1200px) {
#container {
	width: 100%;
	height: 100%;
	}
}

.inner {
	margin:0px auto;
	max-width:1200px;
}

@media screen and (max-width: 1200px) {
.full {
	max-width: 100%;
	padding: 0px 0px;
	}
}

@media screen and (min-width: 1200px) {
.full {
	max-width: 100%;
	padding: 0px 40px;
	}
}


/* wordpress video/media container */
@media screen and (max-width: 1200px) {
.mejs-container {
	margin-bottom: 20px;
	}
}

/* wordpress video/media container */
@media screen and (min-width: 1200px) {
.mejs-container {
	margin-bottom: 30px;
	}
}


iframe {
	position: relative;
    display: block;
}

@media screen and (max-width: 1200px) {
hr {
	background: <?php echo $default_text_color; ?>;
	height: 1px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
hr {
	background: <?php echo $default_text_color; ?>;
	height: 1px;
	margin-bottom: 30px;
	}
}

#footer iframe {
	aspect-ratio: 1 / 1.5;
}
