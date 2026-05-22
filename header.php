<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$parent_style_path = get_template_directory() . '/style.css';
$child_style_path = get_stylesheet_directory() . '/style.css';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_readable( $parent_style_path ) ) : ?>
		<style><?php readfile( $parent_style_path ); ?></style>
	<?php endif; // end parent stylesheet ?>
	<?php if ( $child_style_path !== $parent_style_path && is_readable( $child_style_path ) ) : ?>
		<style><?php readfile( $child_style_path ); ?></style>
	<?php endif; // end child stylesheet ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

<div id="container"><!-- main container -->

	<?php get_template_part( 'template-parts/header/topbar' ); ?>
