<?php /* Template Name: Basic (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">

		<?php if ( get_theme_mod( 'hovercraft_breadcrumbs' ) == 1 ) { ?>
			<div class="breadcrumbs">
				<?php ah_breadcrumb(); ?>
			</div><!-- breadcrumbs -->
		<?php } ?><!-- if hovercraft_breadcrumbs -->
	
		<div id="content">
	
					<h1><?php the_title(); ?></h1>
					<?php $url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
					if ( !empty( $url_featured_image ) && ( !is_singular('product') ) ) { ?>
					<img width="800" height="450" src="<?php echo $url_featured_image; ?>" />
					<?php } ?>
					<?php if ( 'post' == get_post_type() ) { 
						the_time(get_option('date_format')); 
					} ?>
		
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
