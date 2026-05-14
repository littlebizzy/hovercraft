<?php
/* Template Name: Basic (Sidebar) */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>

<div id="main">
<div class="inner">
	
    <div id="primary">
		
	    	<div id="content-wrapper">
			
				<?php get_template_part( 'template-parts/content/featured-image' ); ?>
				
				<div id="content-padded">
					<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
					<?php get_template_part( 'template-parts/content/title' ); ?>
					<?php get_template_part( 'template-parts/content/loop' ); ?>
					<?php get_template_part( 'template-parts/content/pagination' ); ?>
					<?php get_template_part( 'template-parts/content/comments' ); ?>
				<div class="clear"></div>
				</div><!-- content-padded -->
				
			</div><!-- content-wrapper -->

	<div class="clear"></div>
    </div><!-- primary -->
    
    <?php get_template_part( 'sidebar' ); ?>
        
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php endif; // end is_front_page ?>

<?php get_template_part( 'footer' ); ?>
