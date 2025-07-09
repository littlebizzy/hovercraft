<?php
// styles for sidebar
?>

/* sidebar */

@media screen and (max-width: 1200px) {a
#sidebar {
	width: 100%;
	padding: 20px;
	}
}

@media screen and (min-width: 1200px) {
#sidebar {
	float: right;
	width: 392px;
	margin-left: 40px;
	<?php // $sidebar_padding_checked = get_theme_mod( 'hovercraft_sidebar_padding' ) ? true : false;
	// if ( $sidebar_padding_checked == true ) { echo "padding: 40px;"; } ?>
	border-left: 1px solid <?php echo $sidebar_left_border_color; ?>;
	}
}

#sidebar .widget-wrapper {
	width: 100%;
	padding: 40px 40px;
	background: <?php echo $sidebar_widget_background_color; ?>;
	color: <?php echo $sidebar_widget_text_color; ?>;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_widget_border_color; ?> !important;
}

#sidebar .widget-wrapper a {
	color: <?php echo $sidebar_widget_link_color; ?>;
}

@media screen and (max-width: 1200px) {
	#sidebar .widget-wrapper .widget-title {
		font-size: <?php echo $sidebar_widget_title_mobile_font_size; ?>px;
		font-weight: <?php echo $sidebar_widget_title_font_weight; ?>;
		text-transform: <?php echo $sidebar_widget_title_text_transform; ?>;
		color: <?php echo $sidebar_widget_title_text_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
	#sidebar .widget-wrapper .widget-title {
		font-size: <?php echo $sidebar_widget_title_desktop_font_size; ?>px;
		font-weight: <?php echo $sidebar_widget_title_font_weight; ?>;
		text-transform: <?php echo $sidebar_widget_title_text_transform; ?>;
		color: <?php echo $sidebar_widget_title_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
	#sidebar .widget-wrapper:not(:last-child) {
    margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	#sidebar .widget-wrapper:not(:last-child) {
    margin-bottom: 30px;
	}
}

#sidebar .widget-wrapper p:last-child {
	margin-bottom: 0;
}

#sidebar .widget-wrapper ul {
	margin-bottom: 30px;
}

#sidebar .widget-wrapper ul ul {
	margin-bottom: 0;
}

#sidebar .widget-wrapper ul li {
	margin-bottom: 5px;
}
	
#sidebar .widget-wrapper ol {
	margin-bottom: 30px;
}

#sidebar .widget-wrapper ol li {
	margin-bottom: 5px;
}

#sidebar img {
	max-width: 100%;
	height: auto;
	display: block;
}

/* sidebar callout widget area (must load after #sidebar rules) */

#sidebar .widget-callout {
   	background: <?php echo $sidebar_callout_background_color; ?> !important;
	color: <?php echo $sidebar_callout_text_color; ?> !important;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_border_color; ?> !important;
}

#sidebar .widget-callout .widget-title {
	color: <?php echo $sidebar_callout_text_color; ?> !important;
}

#sidebar .widget-callout a {
	color: <?php echo $sidebar_callout_link_color; ?>;
}

@media screen and (max-width: 1200px) {
.cta-sidebar-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}
}

.cta-sidebar-callout ul {
	margin: 0 !important;
	padding: 0 !important;
}
	
@media screen and (max-width: 1200px) {
.cta-sidebar-callout ul li {
	list-style-type: none;
	display: block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout ul li {
	list-style-type: none;
	display: block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
.cta-sidebar-callout ul li a {
	width: 100%;
	font-size: 20px;
	font-weight: 600;
	color: <?php echo $sidebar_callout_link_color; ?> !important;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	margin-bottom: 0;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_cta_border_color; ?> !important;
	background: <?php echo $sidebar_callout_cta_background_color; ?> !important;
	}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout ul li a {
	width: 100%;
	font-size: 20px;
	font-weight: 600;
	color: <?php echo $sidebar_callout_link_color; ?> !important;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_cta_border_color; ?> !important;
	background: <?php echo $sidebar_callout_cta_background_color; ?> !important;
	}
}

.cta-sidebar-callout ul li:hover a {
	color: <?php echo $sidebar_callout_hover_link_color; ?> !important;
	background: <?php echo $sidebar_callout_hover_background_color; ?> !important;
	box-shadow: none !important;
}
