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
