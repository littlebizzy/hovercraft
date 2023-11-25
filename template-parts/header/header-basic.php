<div id="header-basic">
    
    <?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-left">
				<?php add_filter('widget_title', '__return_false');
				dynamic_sidebar( 'hovercraft_preheader_left' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
				remove_filter('widget_title', '__return_false'); ?>
			</div><!-- preheader-left -->
			<div class="preheader-right">
				<?php add_filter('widget_title', '__return_false');
				dynamic_sidebar( 'hovercraft_preheader_right' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
				remove_filter('widget_title', '__return_false'); ?>
			</div><!-- preheader-right -->
			<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-center">
				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) {
					add_filter('widget_title', '__return_false');
					dynamic_sidebar( 'hovercraft_preheader_left' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
					remove_filter('widget_title', '__return_false');
				<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) {
					add_filter('widget_title', '__return_false');
					dynamic_sidebar( 'hovercraft_preheader_right' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
					remove_filter('widget_title', '__return_false');
				<?php } ?>
			</div><!-- preheader-center -->
			<?php } ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- preheader -->
	<?php } ?><!-- if preheader widgets active -->
    
    <?php get_template_part('template-parts/header/navigation'); ?>
</div><!-- header-basic -->
