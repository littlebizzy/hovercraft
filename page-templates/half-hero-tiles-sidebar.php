<?php
/* Template Name: Half Hero Tiles (Sidebar) */

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
		
		<div id="content-wrapper">
			
			<div id="content-padded">
				<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
				<?php get_template_part( 'template-parts/content/loop' ); ?>
				<?php get_template_part( 'template-parts/content/tiles-narrow' ); ?>
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
				<?php get_template_part( 'template-parts/comments/comments' ); ?>
			<div class="clear"></div>
			</div><!-- content-padded -->
			
		</div><!-- content-wrapper -->

	<div class="clear"></div>
	</div><!-- primary -->
	
	<?php get_template_part( 'sidebar' ); ?>
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php endif; // end main content ?>

<?php get_template_part( 'footer' ); ?>
