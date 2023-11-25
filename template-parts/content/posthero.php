<?php if ( is_active_sidebar( 'hovercraft_posthero' ) && in_array( get_theme_mod( 'hovercraft_posthero_widget_display' ), array(
		'full_hero_only',
		'full_and_half_hero',
		'full_and_half_and_mini_hero'
		)
    )) : ?>
	<div id="posthero">
		<div class="inner">
			<?php add_filter('widget_title', '__return_false');
			dynamic_sidebar( 'hovercraft_posthero' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
			remove_filter('widget_title', '__return_false'); ?>
		<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- posthero -->
	<?php endif; ?>
