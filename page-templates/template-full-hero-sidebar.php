<?php /* Template Name: Full Hero (Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-full-hero' ); ?>
<?php get_template_part( 'template-parts/content/posthero' ); ?>
<?php get_template_part( 'template-parts/content/premain' ); ?>

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

<?php get_template_part( 'footer' ); ?>
