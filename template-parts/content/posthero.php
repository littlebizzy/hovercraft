<?php if ( is_active_sidebar( 'hovercraft_posthero' ) && in_array( get_theme_mod( 'hovercraft_posthero_widget_display' ), array(
		'full_hero_only',
		'full_and_half_hero',
		'full_and_half_and_mini_hero',
		)
    )) : ?>
	<div id="posthero">
	<div class="inner">
		<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
		dynamic_sidebar( 'hovercraft_posthero' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
		<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- posthero -->
	<?php endif; ?>
