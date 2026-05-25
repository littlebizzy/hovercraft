<?php
/* Template Name: Basic Columns (No Sidebar) */

// basic columns page template

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>
<?php if ( hovercraft_should_show_main_content() ) : ?>
<?php get_template_part( 'template-parts/content/columns' ); ?>
<?php endif; // end main content ?>
<?php get_template_part( 'footer' ); ?>
