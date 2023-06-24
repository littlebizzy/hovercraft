<?php /* Template Name: Basic (Gallery) Sidebar */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
	
    <div id="primary">
		
	    	<div id="content">
			
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				<?php get_template_part( 'template-parts/content/featured-image' ); ?>
				
				<div class="content-padded">
					<h1><?php the_title(); ?></h1>
					<?php get_template_part( 'template-parts/content/loop' ); ?>
					
				<div class="swiper">
  				
				<!-- Additional required wrapper -->
  				<div class="swiper-wrapper">

     			<?php 
        		$query_images_args = array(
            		'post_type'      => 'attachment',
            		'post_parent'    => $post->ID,
            		'post_mime_type' => 'image',
            		'post_status'    => 'inherit',
            		'orderby'        => 'post_date',
            		'posts_per_page' =>  30,
        		);
																								  
    			$query_images = new WP_Query( $query_images_args );

        		if($query_images->have_posts()) : 
            		while($query_images->have_posts()) : 
                	$query_images->the_post(); ?>

    <!-- Slides -->
    <div class="swiper-slide">
    	<div><?php echo wp_get_attachment_image( $query_images->posts->ID, 'medium' ); ?></div>
    </div>
  
            <?php endwhile; ?>
        <?php else : ?>
            <p>No media file yet</p>
        <?php endif;

        /* Restore original Post Data */
        wp_reset_postdata(); ?>
		</div>
		</div>
					
					<?php get_template_part( 'template-parts/content/last-modified' ); ?>
					<?php get_template_part( 'template-parts/content/pagination' ); ?>
					<?php get_template_part( 'template-parts/content/comments' ); ?>
				<div class="clear"></div>
				</div><!-- content-padded -->
				
			</div><!-- content -->

	<div class="clear"></div>
    </div><!-- primary -->
    
    <?php get_template_part( 'sidebar' ); ?>
        
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } //endif is_front_page ?>

<?php get_template_part( 'footer' ); 
// https://wordpress.org/support/topic/show-all-attached-images-of-a-specific-post/
?>
