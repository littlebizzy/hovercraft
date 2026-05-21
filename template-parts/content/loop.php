<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<div class="entry-content"><?php the_content(); ?></div>
	<?php endwhile; // end posts ?>
<?php endif; ?><!-- end the loop -->
