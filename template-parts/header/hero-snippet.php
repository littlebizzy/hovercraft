<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) : ?>
	<?php
	add_filter( 'widget_title', '__return_false' );
	dynamic_sidebar( 'hovercraft_hero_snippet' );
	remove_filter( 'widget_title', '__return_false' );
	?>
<?php else : ?>
	<?php the_excerpt(); ?>
<?php endif; ?>
