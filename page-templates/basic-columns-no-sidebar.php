<?php /* Template Name: Basic Columns (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>
<?php if ( hovercraft_should_show_main_content() ) { ?>
<?php get_template_part( 'template-parts/content/columns' ); ?>
<?php } ?>
<?php get_template_part( 'footer' ); ?>
