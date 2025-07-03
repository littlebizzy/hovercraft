<?php
// styles for headings
?>

@media screen and (max-width: 1200px) {
h1 {
	font-family: <?php echo !empty($h1_font_family) ? ucwords(str_replace("_", " ", $h1_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h1_font_weight; ?>;
	font-size: <?php echo $h1_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h1 {
	font-family: <?php echo !empty($h1_font_family) ? ucwords(str_replace("_", " ", $h1_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h1_font_weight; ?>;
	font-size: <?php echo $h1_desktop_font_size; ?>px;
	margin-bottom: 30px;
	}
}

@media screen and (max-width: 1200px) {
h1.divide:after {
	margin-top: 10px;
	margin-bottom: 20px;
	content: '';
	display: block;
	border: 1px solid <?php echo $title_divider_background_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
h1.divide:after {
	margin-top: 15px;
	margin-bottom: 30px;
	content: '';
	display: block;
	border: 1px solid <?php echo $title_divider_background_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
h2 {
	font-family: <?php echo !empty($h2_font_family) ? ucwords(str_replace("_", " ", $h2_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h2_font_weight; ?>;
	font-size: <?php echo $h2_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h2 {
	font-family: <?php echo !empty($h2_font_family) ? ucwords(str_replace("_", " ", $h2_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h2_font_weight; ?>;
	font-size: <?php echo $h2_desktop_font_size; ?>px;
	margin-bottom: 30px;
	}
}

@media screen and (max-width: 1200px) {
h2:after {
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-top: 10px;"; } ?>
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-bottom: 20px;"; } ?>
	content: '';
	display: block;
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "border: 1px solid $title_divider_background_color;"; } ?>
	}
}
	
@media screen and (min-width: 1200px) {
h2:after {
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-top: 15px;"; } ?>
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-bottom: 30px;"; } ?>
	content: '';
	display: block;
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "border: 1px solid $title_divider_background_color;"; } ?>
	}
}

@media screen and (max-width: 1200px) {
h3 {
	font-family: <?php echo !empty($h3_font_family) ? ucwords(str_replace("_", " ", $h3_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h3_font_weight; ?>;
	font-size: <?php echo $h3_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h3 {
	font-family: <?php echo !empty($h3_font_family) ? ucwords(str_replace("_", " ", $h3_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h3_font_weight; ?>;
	font-size: <?php echo $h3_desktop_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (max-width: 1200px) {
h4 {
	font-family: <?php echo !empty($h4_font_family) ? ucwords(str_replace("_", " ", $h4_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h4_font_weight; ?>;
	font-size: <?php echo $h4_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h4 {
	font-family: <?php echo !empty($h4_font_family) ? ucwords(str_replace("_", " ", $h4_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h4_font_weight; ?>;
	font-size: <?php echo $h4_desktop_font_size; ?>px;
	margin-bottom: 20px;
	}
}

h4.sitename-offcanvas {
	font-weight: 600;
	font-size: <?php echo $h4_desktop_font_size; ?>px;
	line-height: 1;
	margin-bottom: 20px;
	padding-left: 20px;
	}

@media screen and (max-width: 1200px) {
h5 {
	font-family: <?php echo !empty($h5_font_family) ? ucwords(str_replace("_", " ", $h5_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h5_font_weight; ?>;
	font-size: <?php echo $h5_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h5 {
	font-family: <?php echo !empty($h5_font_family) ? ucwords(str_replace("_", " ", $h5_font_family)) : ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-weight: <?php echo $h5_font_weight; ?>;
	font-size: <?php echo $h5_desktop_font_size; ?>px;
	margin-bottom: 20px;
	}
}
	
h5.author-biography-intro {
	font-size: 14px;
	font-weight: 600;
	text-transform: uppercase;
	color: #607D8B;
}
