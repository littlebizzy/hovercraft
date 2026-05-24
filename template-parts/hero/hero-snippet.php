<?php

// check hero snippet widget area
$hovercraft_hero_snippet_active = is_active_sidebar( 'hovercraft_hero_snippet' );

// render hero snippet widgets
if ( $hovercraft_hero_snippet_active ) : ?>
	<?php
	// remove widget titles for hero snippet widgets
	add_filter( 'widget_title', '__return_false' );
	dynamic_sidebar( 'hovercraft_hero_snippet' );
	remove_filter( 'widget_title', '__return_false' );
	?>
<?php else : ?>
	<?php // render hero snippet excerpt ?>
	<?php the_excerpt(); ?>
<?php endif; // end hero snippet ?>
