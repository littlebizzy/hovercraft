<div id="primary">
	
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>

<div class="clear"></div>
</div><!-- primary -->
