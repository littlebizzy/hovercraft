<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for headings
?>

h1, h2, h3, h4, h5 {
	color: <?php echo $default_text_color; ?>;
	line-height: 1.3;
}

h1 {
	font-family: <?php echo hovercraft_format_css_font_family( $h1_font_family, $default_font_family ); ?>;
	font-weight: <?php echo $h1_font_weight; ?>;
}

h2 {
	font-family: <?php echo hovercraft_format_css_font_family( $h2_font_family, $default_font_family ); ?>;
	font-weight: <?php echo $h2_font_weight; ?>;
}

h3 {
	font-family: <?php echo hovercraft_format_css_font_family( $h3_font_family, $default_font_family ); ?>;
	font-weight: <?php echo $h3_font_weight; ?>;
}

h4 {
	font-family: <?php echo hovercraft_format_css_font_family( $h4_font_family, $default_font_family ); ?>;
	font-weight: <?php echo $h4_font_weight; ?>;
}

h5 {
	font-family: <?php echo hovercraft_format_css_font_family( $h5_font_family, $default_font_family ); ?>;
	font-weight: <?php echo $h5_font_weight; ?>;
}

h1.divide:after {
	content: '';
	display: block;
	border: 1px solid <?php echo $title_divider_background_color; ?>;
}

h2:after {
	content: '';
	display: block;
	<?php if ( $h2_divider_display == 'everywhere_possible' ) { echo "border: 1px solid $title_divider_background_color;"; } ?>
}

@media screen and (max-width: 1199px) {
	h1 {
		font-size: <?php echo $h1_mobile_font_size; ?>px;
		margin-bottom: 20px;
	}

	h1.divide:after {
		margin-top: 10px;
		margin-bottom: 20px;
	}

	h2 {
		font-size: <?php echo $h2_mobile_font_size; ?>px;
		margin-bottom: 20px;
	}

	h2:after {
		<?php if ( $h2_divider_display == 'everywhere_possible' ) { echo "margin-top: 10px;"; } ?>
		<?php if ( $h2_divider_display == 'everywhere_possible' ) { echo "margin-bottom: 20px;"; } ?>
	}

	h3 {
		font-size: <?php echo $h3_mobile_font_size; ?>px;
		margin-bottom: 20px;
	}

	h4 {
		font-size: <?php echo $h4_mobile_font_size; ?>px;
		margin-bottom: 20px;
	}

	h5 {
		font-size: <?php echo $h5_mobile_font_size; ?>px;
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	h1 {
		font-size: <?php echo $h1_desktop_font_size; ?>px;
		margin-bottom: 30px;
	}

	h1.divide:after {
		margin-top: 15px;
		margin-bottom: 30px;
	}

	h2 {
		font-size: <?php echo $h2_desktop_font_size; ?>px;
		margin-bottom: 30px;
	}

	h2:after {
		<?php if ( $h2_divider_display == 'everywhere_possible' ) { echo "margin-top: 15px;"; } ?>
		<?php if ( $h2_divider_display == 'everywhere_possible' ) { echo "margin-bottom: 30px;"; } ?>
	}

	h3 {
		font-size: <?php echo $h3_desktop_font_size; ?>px;
		margin-bottom: 20px;
	}

	h4 {
		font-size: <?php echo $h4_desktop_font_size; ?>px;
		margin-bottom: 20px;
	}

	h5 {
		font-size: <?php echo $h5_desktop_font_size; ?>px;
		margin-bottom: 20px;
	}
}

h4.sitename-offcanvas {
	padding-left: 20px;
	font-size: <?php echo $h4_desktop_font_size; ?>px;
	font-weight: 600;
	line-height: 1;
	margin-bottom: 20px;
}

h5.author-biography-intro {
	color: #607D8B;
	font-size: 14px;
	font-weight: 600;
	text-transform: uppercase;
}
