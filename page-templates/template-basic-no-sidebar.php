<?php /* Template Name: Basic (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php get_template_part( 'template-parts/content/premain' ); ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">

		<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
		<div id="content">
			
			<h1><?php the_title(); ?></h1>
			
			<?php $url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
			if ( !empty( $url_featured_image ) ) { ?>
			<img class="featured-image" src="<?php echo $url_featured_image; ?>" />
			<?php } ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?><!-- the loop -->
	
		<div class="clear"></div>
		<?php hovercraft_pagination_nav(); ?>	
	
			<div class="clear"></div>
		</div><!-- content -->

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
