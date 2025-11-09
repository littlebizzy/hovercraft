<?php
// styles for footer callout
?>

#footer .widget-footer-callout {
	background: <?php echo $footer_callout_background_color; ?> !important;
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

@media screen and (max-width: 1200px) {
	.cta-footer-callout {
		display: block;
		width: 100%;
		margin-top: 40px;
	}
}

@media screen and (min-width: 1200px) {
	.cta-footer-callout {
		display: block;
		width: 100%;
		margin-top: 40px;
	}
}
