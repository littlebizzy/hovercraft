<?php
/* Template Name: Basic (No Sidebar) */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">
	
		<div id="content-wrapper">
		
			<?php get_template_part( 'template-parts/content/featured-image-large' ); ?>
		
			<div id="content-wide">
				<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
				<?php get_template_part( 'template-parts/content/title' ); ?>
				<?php get_template_part( 'template-parts/content/loop' ); ?>
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
				<?php get_template_part( 'template-parts/comments/comments' ); ?>
			<div class="clear"></div>
			</div><!-- content-padded -->
	
		</div><!-- content-wrapper -->

	<div class="clear"></div>
	</div><!-- primary-wide -->
	
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php endif; // end is_front_page ?>

<?php get_template_part( 'footer' ); ?>
