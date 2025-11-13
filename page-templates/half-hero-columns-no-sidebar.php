<?php /* Template Name: Half Hero Columns (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-half-hero' ); ?>

	<?php if ( is_active_sidebar( 'hovercraft_posthero' ) && in_array( get_theme_mod( 'hovercraft_posthero_widget_display' ), array(
		'full_and_half_hero',
		'full_and_half_and_mini_hero'
		) )) : ?>
		<?php get_template_part( 'template-parts/content/posthero' ); ?>
	<?php endif; ?>

<div id="main">
<div class="inner">
	
<div id="primary-wide">
	
<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
<?php get_template_part( 'template-parts/content/loop' ); ?>
<?php get_template_part( 'template-parts/content/columns' ); ?>

<div class="clear"></div>
</div><!-- primary -->

<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->
	
<?php get_template_part( 'footer' ); ?>
