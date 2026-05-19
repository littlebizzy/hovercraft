<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for footer callout
?>

#footer .widget-footer-callout {
	background: <?php echo $footer_callout_background_color; ?> !important;
	border-radius: 8px;
	color: <?php echo $footer_callout_text_color; ?> !important;
	box-shadow: inset 0 0 0 1px <?php echo $footer_callout_border_color; ?> !important;
	padding: <?php echo $footer_callout_padding; ?>px;
}

#footer .widget-footer-callout .widget-title {
	color: <?php echo $footer_callout_text_color; ?> !important;
}

#footer .widget-footer-callout a {
	color: <?php echo $footer_callout_link_color; ?>;
	text-decoration: <?php echo $footer_callout_link_decoration; ?>;
}

#footer .widget-wrapper p:last-child {
	margin-bottom: 0;
}

.cta-footer-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}

.cta-footer-callout ul {
	margin: 0 !important;
	padding: 0 !important;
}

.cta-footer-callout ul li {
	display: block;
	margin: 0;
	padding: 0;
	list-style-type: none;
	text-align: center;
	vertical-align: middle;
}

.cta-footer-callout ul li a {
	display: block;
	width: 100%;
	padding: 10px 0;
	border-radius: 4px;
}
