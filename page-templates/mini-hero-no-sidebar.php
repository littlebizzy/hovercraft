<?php
/* Template Name: Mini Hero (No Sidebar) */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

	<?php if ( hovercraft_should_show_posthero( 'mini' ) ) : ?>
		<?php get_template_part( 'template-parts/content/posthero' ); ?>
	<?php endif; ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">
	
		<?php get_template_part( 'template-parts/content/content-wide' ); ?>
	
		<?php get_template_part( 'template-parts/content/comments' ); ?>

		<div class="clear"></div>
	</div><!-- primary-wide -->
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php endif; ?>

<?php get_template_part( 'footer' ); ?>
