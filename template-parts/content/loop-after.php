<?php if ( is_active_sidebar('hovercraft_after_loop')) { ?>
    <div class="after-loop">
        <?php add_filter('widget_title', '__return_false');
		dynamic_sidebar( 'hovercraft_after_loop' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
		remove_filter('widget_title', '__return_false'); ?>
    <div class="clear"></div>
    </div><!-- after-loop -->
<?php } ?>
