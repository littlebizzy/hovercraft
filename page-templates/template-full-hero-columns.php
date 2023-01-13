<?php /* Template Name: Full Hero Columns */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-full-hero' ); ?>

	<?php if ( is_active_sidebar( 'hovercraft_main_begin' ) && in_array( get_theme_mod( 'hovercraft_main_begin_widget_display' ), array(
		'full_hero_only',
		'full_and_half_hero',
		'full_and_half_and_mini_hero',
		)
	)) : ?>
	<div class="main-begin">
	<div class="inner">
		<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_main_begin' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
		<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main-begin -->
	<?php endif; ?>

<?php get_template_part( 'template-parts/content/columns' ); ?>
<?php get_template_part( 'footer' ); ?>
