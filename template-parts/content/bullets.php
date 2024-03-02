<div id="main">
<div class="inner">
	
	<div id="primary-wide">
	<div id="content-wrapper">
	<div id="content-padded">
	
	<div id="bullets">
		
				<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'faq',
            'post_status' => 'publish',
            'posts_per_page' => 999,
        ));
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="faq-item">
                <h5><?php the_title(); ?></h5>					
					
				<?php $hovercraft_bullets_html_content = get_theme_mod( 'hovercraft_bullets_html_content', 'none' );
				if ( $hovercraft_bullets_html_content == 'include_html') { 
					the_content();
				} else {
					$hovercraft_faq_character_count = get_theme_mod( 'hovercraft_faq_character_count', '300' );
					$content = get_the_content();
					//echo wp_strip_all_tags( $content );
					echo wp_trim_words( $content, $hovercraft_faq_character_count, '...' );
					
					// https://stackoverflow.com/questions/65033340/how-can-i-get-wordpress-page-content-without-html-tags
					// https://wordpress.stackexchange.com/questions/94848/how-can-i-remove-all-html-tags-from-get-the-content
					// https://stackoverflow.com/questions/17387313/custom-wp-strip-all-tags-wordpress-function
				} ?>
					
				</div><!-- faq-item -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No posts'); ?></p>
        <?php endif; ?>

		
	<div class="clear"></div>
	</div><!-- bullets -->
		
	</div><!-- content-padded -->
	</div><!-- content-wrapper -->
	</div><!-- primary-wide -->
        	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<!-- https://codepen.io/MSEdgeDev/pen/bpExOB -->
<!-- https://wordpress.stackexchange.com/questions/145125/display-content-from-a-specific-category -->
<!-- https://stackoverflow.com/questions/8506783/css3-columns-force-non-breaking-splitting-element -->
