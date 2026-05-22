<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
		// inline parent theme's stylesheet
		$parent_style_path = get_template_directory() . '/style.css';
		?>
		<?php if ( is_readable( $parent_style_path ) ) : ?>
			<style><?php echo file_get_contents( $parent_style_path ); ?></style>
		<?php endif; // end parent-style-path ?>

		<?php
		// inline child theme's stylesheet
		$child_style_path = get_stylesheet_directory() . '/style.css';
		?>
		<?php if ( is_readable( $child_style_path ) ) : ?>
			<style><?php echo file_get_contents( $child_style_path ); ?></style>
		<?php endif; // end child-style-path ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

		<div id="container"><!-- main container -->

			<?php get_template_part( 'template-parts/header/topbar' ); ?>
