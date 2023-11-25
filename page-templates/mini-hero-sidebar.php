<?php /* Template Name: Mini Hero (Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

	<?php if ( is_active_sidebar( 'hovercraft_posthero' ) && in_array( get_theme_mod( 'hovercraft_posthero_widget_display' ), array(
		'full_and_half_and_mini_hero'
		) )) : ?>
		<?php get_template_part( 'template-parts/content/posthero' ); ?>
	<?php endif; ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
    <div id="primary">
	
	    <?php get_template_part( 'template-parts/content/content' ); ?>
	
	    <?php get_template_part( 'template-parts/content/comments' ); ?> 

	    <div class="clear"></div>
    </div><!-- primary -->
    
    <?php get_template_part( 'sidebar' ); ?>
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } ?>

<?php get_template_part( 'footer' ); ?>
