<div id="main">
<div class="inner">
	
	<div id="primary-wide">
	<div id="content">
	<div class="content-padded">
	
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
                <?php the_content(); ?>
				</div><!-- faq-item -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No posts'); ?></p>
        <?php endif; ?>

		
	<div class="clear"></div>
	</div><!-- bullets -->
		
	</div><!-- content-padded -->
	</div><!-- content -->
	</div><!-- primary-wide -->
        	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<!-- https://codepen.io/MSEdgeDev/pen/bpExOB -->
<!-- https://wordpress.stackexchange.com/questions/145125/display-content-from-a-specific-category -->
<!-- https://stackoverflow.com/questions/8506783/css3-columns-force-non-breaking-splitting-element -->
