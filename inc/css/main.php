<?php
// styles for main
?>

/* main */
/* main refers to everything between header/splash and footer */

@media screen and (max-width: 1200px) {
#main {
	width: 100%;
	padding: 0;
	background: <?php echo $main_background_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#main {
	padding: 40px 0px;
	background: <?php echo $main_background_color; ?>;
	}
}

body.home #main {
	background: <?php echo $main_background_color_homepage; ?>;
}

body.home #content-wide {
	background: <?php echo $main_background_color_homepage; ?>;
}

/* primary */
<?php
$hovercraft_primary_css = get_template_directory() . '/inc/css/primary.php';
if ( file_exists( $hovercraft_primary_css ) ) {
	include $hovercraft_primary_css;
}
?>

/* content */
<?php
$hovercraft_content_css = get_template_directory() . '/inc/css/content.php';
if ( file_exists( $hovercraft_content_css ) ) {
	include $hovercraft_content_css;
}
?>
