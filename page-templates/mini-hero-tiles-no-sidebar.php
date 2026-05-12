<?php
/* Template Name: Mini Hero Tiles (No Sidebar) */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

	<?php if ( hovercraft_should_show_posthero( 'mini' ) ) : ?>
		<?php get_template_part( 'template-parts/header/posthero' ); ?>
	<?php endif; ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>

<div id="main">
<div class="inner">
    
    <div id="primary-wide">

	<div id="content-wrapper">

	<div id="content-wide">
			
	<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
		
	<?php get_template_part( 'template-parts/content/loop' ); ?>
		
	<?php get_template_part( 'template-parts/content/tiles-wide' ); ?>
						
	<?php get_template_part( 'template-parts/content/pagination' ); ?>
				
	<div class="clear"></div>
	</div><!-- content-padded -->
		
	</div><!-- content-wrapper -->   
	
	    <?php get_template_part( 'template-parts/content/comments' ); ?>

	    <div class="clear"></div>
    </div><!-- primary -->
        
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php endif; // if is_front_page ?>

<?php get_template_part( 'footer' ); ?>
