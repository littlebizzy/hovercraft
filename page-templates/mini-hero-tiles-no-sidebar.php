<?php /* Template Name: Mini Hero Tiles (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

	<?php if ( is_active_sidebar( 'hovercraft_posthero' ) && in_array( get_theme_mod( 'hovercraft_posthero_widget_display' ), array(
		'full_and_half_and_mini_hero'
		) )) : ?>
		<?php get_template_part( 'template-parts/content/posthero' ); ?>
	<?php endif; ?>

<?php get_template_part( 'template-parts/content/tiles' ); ?>
<?php get_template_part( 'footer' ); ?>
