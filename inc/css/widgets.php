<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for widget styles
?>

/* widgets */

.widget-wrapper .widget-title,
.widget-wrapper .widgettitle,
.widget-wrapper h1,
.widget-wrapper h2,
.widget-wrapper h3,
.widget-wrapper h4,
.widget-wrapper h5,
.widget-wrapper h6 {
	color: inherit;
}

.widget-wrapper ul li ul {
	margin-left: 0 !important;
}

.widget-wrapper ul li ul li {
	margin-left: 0 !important;
	list-style-type: circle;
}

.widget-wrapper iframe {
	max-width: 100%;
	border-radius: 0;
}
