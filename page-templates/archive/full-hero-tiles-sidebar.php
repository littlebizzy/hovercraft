<?php /* Template Name: Full Hero Tiles (Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-full-hero' ); ?>

	<?php if ( is_active_sidebar( 'hovercraft_posthero' ) && in_array( get_theme_mod( 'hovercraft_posthero_widget_display' ), array(
		'full_hero_only',
		'full_and_half_hero',
		'full_and_half_and_mini_hero'
		) )) : ?>
		<?php get_template_part( 'template-parts/content/posthero' ); ?>
	<?php endif; ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
    <div id="primary">

	<div id="content">
	
	<div class="content-padded">
		
	<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>

	<?php get_template_part( 'template-parts/content/loop' ); ?>
		
	<?php get_template_part( 'template-parts/content/tiles-narrow' ); ?>
						
	<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
	</div><!-- content-padded -->
	
	<div class="clear"></div>
	</div><!-- content -->   
	
	    <?php comments_template(); ?> 

	    <div class="clear"></div>
    </div><!-- primary -->
    
    <?php get_template_part( 'sidebar' ); ?>
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } // if is_front_page ?>

<?php get_template_part( 'footer' ); ?>