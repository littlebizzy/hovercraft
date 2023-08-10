<?php if ( is_active_sidebar('hovercraft_after_byline')) { ?>
    <div class="after-byline">
        <?php add_filter ( 'widget_title' , 'my_widget_title', 10, 1); //we use the default priority and 3 arguments in the callback function
            dynamic_sidebar( 'hovercraft_after_byline' ); remove_filter('widget_title', 'my_widget_title'); ?>
    <div class="clear"></div>
    </div><!-- after-byline -->
<?php } ?>
