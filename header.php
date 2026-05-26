<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	// inline parent theme's stylesheet
	$parent_style_path = get_template_directory() . '/style.css';

	if ( is_readable( $parent_style_path ) ) {
		?><style><?php readfile( $parent_style_path ); ?></style><?php
	}
	?>

	<?php
	// inline child theme's stylesheet
	$child_style_path = get_stylesheet_directory() . '/style.css';

	if ( is_child_theme() && is_readable( $child_style_path ) ) {
		?><style><?php readfile( $child_style_path ); ?></style><?php
	}
	?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'hovercraft' ); ?></a>

<?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

<div id="container"><!-- main container -->

	<?php
	// open screen-aligned hero viewport shell
	if ( is_page_template( array(
		'page-templates/full-hero-no-sidebar.php',
		'page-templates/full-hero-sidebar.php',
		'page-templates/full-hero-columns-no-sidebar.php',
		'page-templates/full-hero-gallery-no-sidebar.php',
		'page-templates/full-hero-tiles-no-sidebar.php',
		'page-templates/full-hero-tiles-sidebar.php',
	) ) ) :
		?>
		<div id="full-hero-viewport">
	<?php elseif ( is_page_template( array(
		'page-templates/half-hero-no-sidebar.php',
		'page-templates/half-hero-sidebar.php',
		'page-templates/half-hero-columns-no-sidebar.php',
		'page-templates/half-hero-gallery-no-sidebar.php',
		'page-templates/half-hero-tiles-no-sidebar.php',
		'page-templates/half-hero-tiles-sidebar.php',
	) ) ) :
		?>
		<div id="half-hero-viewport">
	<?php endif; ?>

	<?php get_template_part( 'template-parts/header/header-topbar' ); ?>
