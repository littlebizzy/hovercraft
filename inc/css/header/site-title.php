<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for site title
?>

/* site title (site name) */

@media screen and (max-width: 1200px) {
.site-title {
	font-family: <?php echo hovercraft_format_css_font_family( $site_name_font_family, $default_font_family ); ?>;
	text-transform: <?php echo $site_name_text_transform; ?>;
	font-size: <?php echo $site_name_mobile_font_size; ?>px;
	font-weight: <?php echo $site_name_font_weight; ?>;
	line-height: 1; /* site-tagline is hidden on mobile anyways */
	display: <?php echo $site_name_display_mobile; ?>;
	}
}

@media screen and (min-width: 1200px) {
.site-title {
	font-family: <?php echo hovercraft_format_css_font_family( $site_name_font_family, $default_font_family ); ?>;
	text-transform: <?php echo $site_name_text_transform; ?>;
	font-size: <?php echo $site_name_desktop_font_size; ?>px;
	font-weight: <?php echo $site_name_font_weight; ?>;
	line-height: 1; /* therefore site-tagline requires padding-top */
	display: block;
	}
}

.site-title-link {
	<?php if ( $tagline_display == 'right_of_site_title' ) { 
			echo "display: inline-block;\n"; 
		} else { 
			echo "display: block;\n"; 
		}  ?>
}
