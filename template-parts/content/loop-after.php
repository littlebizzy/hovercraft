<?php

if ( is_active_sidebar('hovercraft_after_loop')) : ?>
    <div class="after-loop">
        <?php add_filter('widget_title', '__return_false');
		// output hovercraft_after_loop sidebar
		dynamic_sidebar( 'hovercraft_after_loop' );
		remove_filter('widget_title', '__return_false'); ?>
    <div class="clear"></div>
    </div><!-- after-loop -->
<?php endif; // end hovercraft-after-loop sidebar ?>
