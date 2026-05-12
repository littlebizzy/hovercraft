<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?><!-- the loop -->
