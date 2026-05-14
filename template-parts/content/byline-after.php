<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 if ( is_active_sidebar('hovercraft_after_byline')) : ?>
    <div class="after-byline">
        <?php add_filter('widget_title', '__return_false');
		// output hovercraft_after_byline sidebar
		dynamic_sidebar( 'hovercraft_after_byline' );
		remove_filter('widget_title', '__return_false'); ?>
    <div class="clear"></div>
    </div><!-- after-byline -->
<?php endif; // end hovercraft-after-byline sidebar ?>
