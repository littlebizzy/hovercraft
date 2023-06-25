<?php /* Template Name: Full Hero Columns (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-full-hero' ); ?>
<?php get_template_part( 'template-parts/content/posthero' ); ?>

<div id="main">
<div class="inner">
	
<div id="primary-wide">
	
<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
<?php get_template_part( 'template-parts/content/loop' ); ?>
<?php get_template_part( 'template-parts/content/columns' ); ?>

<div class="clear"></div>
</div><!-- primary -->

<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->
	
<?php get_template_part( 'footer' ); ?>
