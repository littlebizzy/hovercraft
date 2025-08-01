<?php
// styles for site title
?>

/* site title (site name) */

@media screen and (max-width: 1200px) {
.site-title {
	font-family: <?php 
        echo !empty($site_name_font_family) 
            ? ucwords(str_replace("_", " ", $site_name_font_family)) 
            : (!empty($default_font_family) 
                ? ucwords(str_replace("_", " ", $default_font_family)) 
                : 'sans-serif'); 
    ?>;
	text-transform: <?php echo $site_name_text_transform; ?>;
	font-size: <?php echo $site_name_mobile_font_size; ?>px;
	font-weight: <?php echo $site_name_font_weight; ?>;
	line-height: 1; /* site-tagline is hidden on mobile anyways */
	display: <?php echo $site_name_display_mobile; ?>;
	}
}

@media screen and (min-width: 1200px) {
.site-title {
	font-family: <?php 
        echo !empty($site_name_font_family) 
            ? ucwords(str_replace("_", " ", $site_name_font_family)) 
            : (!empty($default_font_family) 
                ? ucwords(str_replace("_", " ", $default_font_family)) 
                : 'sans-serif'); 
    ?>;
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
