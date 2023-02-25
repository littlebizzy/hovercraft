<?php /* Template Name: Mini Hero (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>
<?php get_template_part( 'template-parts/content/posthero' ); ?>
<?php get_template_part( 'template-parts/content/premain' ); ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">

		<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
		<?php get_template_part( 'template-parts/content/content' ); ?>

		<div class="last-modified">
			<span> <?php _e('Last modified on ', 'hovercraft'); echo the_modified_time('F j, Y'); ?> </span>
		</div><!-- last-modified -->
	
		<?php comments_template(); ?> 

		<div class="clear"></div>
	</div><!-- primary-wide -->
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
