<?php
/* Template Name: Half Hero (Sidebar) */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-half-hero' ); ?>
</div><!-- half-hero-viewport -->

	<?php if ( hovercraft_should_show_posthero( 'half' ) ) : ?>
		<?php get_template_part( 'template-parts/hero/hero-posthero' ); ?>
	<?php endif; // end posthero ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>

<div id="main">
<div class="inner">
    
    <div id="primary">
	
	    <?php get_template_part( 'template-parts/content/content' ); ?>
	
	    <?php get_template_part( 'template-parts/comments/comments' ); ?>

	    <div class="clear"></div>
    </div><!-- primary -->
    
    <?php get_template_part( 'sidebar' ); ?>
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php endif; // end main content ?>

<?php get_template_part( 'footer' ); ?>
