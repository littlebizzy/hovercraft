<?php /* Template Name: Mini Hero (Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>
<?php get_template_part( 'template-parts/content/posthero' ); ?>
<?php get_template_part( 'template-parts/content/premain' ); ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
    <div id="primary">

	    <?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
	    <?php get_template_part( 'template-parts/content/content' ); ?>

	    <?php get_template_part( 'template-parts/content/last-modified' ); ?>
	
	    <?php comments_template(); ?> 

	    <div class="clear"></div>
    </div><!-- primary -->
    
    <?php get_template_part( 'sidebar' ); ?>
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } ?>

<?php get_template_part( 'footer' ); ?>
