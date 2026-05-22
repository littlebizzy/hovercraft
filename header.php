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
	<?php hovercraft_print_inline_stylesheet( get_template_directory() . '/style.css' ); ?>
	<?php if ( get_stylesheet_directory() !== get_template_directory() ) : ?>
		<?php hovercraft_print_inline_stylesheet( get_stylesheet_directory() . '/style.css' ); ?>
	<?php endif; // end child stylesheet ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

<div id="container"><!-- main container -->

	<?php get_template_part( 'template-parts/header/topbar' ); ?>
