<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for breadcrumbs
?>

/* breadcrumbs */

@media screen and (max-width: 1200px) {
.breadcrumbs {
	width: 100%;
	margin-bottom: 20px;
	font-size: 14px;	line-height: 18px !important;
	color: <?php echo $breadcrumbs_text_color; ?>;
	white-space: normal;
	}
}

@media screen and (min-width: 1200px) {
.breadcrumbs {
	margin-bottom: 30px;
	font-size: 14px;
	line-height: 20px !important;
	color: <?php echo $breadcrumbs_text_color; ?>;
	white-space: normal;
	}
}

.breadcrumbs ul {
	display: inline;
	list-style-position: unset;
	margin-left: 0 !important;
}

.breadcrumbs ul li {
	display: inline;
	word-break: break-all;
	margin-right: 5px;
}

.breadcrumbs i {
	font-size: 18px !important;
	margin-right: 5px;
}

.breadcrumbs a {
	color: <?php echo $breadcrumbs_link_color; ?>;
}

/* content */
<?php
$hovercraft_content_css = get_template_directory() . '/inc/css/content.php';
if ( file_exists( $hovercraft_content_css ) ) {
	include $hovercraft_content_css;
}
?>

/* author box */
<?php
$hovercraft_author_box_css = get_template_directory() . '/inc/css/author-box.php';
if ( file_exists( $hovercraft_author_box_css ) ) {
	include $hovercraft_author_box_css;
}
?>

/* columns */
<?php
$hovercraft_columns_css = get_template_directory() . '/inc/css/columns.php';
if ( file_exists( $hovercraft_columns_css ) ) {
	include $hovercraft_columns_css;
}
?>

/* captions */
<?php
$hovercraft_captions_css = get_template_directory() . '/inc/css/captions.php';
if ( file_exists( $hovercraft_captions_css ) ) {
	include $hovercraft_captions_css;
}
?>

/* zigzag */
<?php
$hovercraft_zigzag_css = get_template_directory() . '/inc/css/zigzag.php';
if ( file_exists( $hovercraft_zigzag_css ) ) {
	include $hovercraft_zigzag_css;
}
?>
