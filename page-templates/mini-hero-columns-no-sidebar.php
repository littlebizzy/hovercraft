<?php
/* Template Name: Mini Hero Columns (No Sidebar) */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

	<?php if ( hovercraft_should_show_posthero( 'mini' ) ) : ?>
		<?php get_template_part( 'template-parts/hero/hero-posthero' ); ?>
	<?php endif; // end posthero ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>

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
	
<?php endif; // end main content ?>
	
<?php get_template_part( 'footer' ); ?>
