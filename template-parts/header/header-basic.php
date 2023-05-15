<div id="header-basic">
    
    <?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-left">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_preheader_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- preheader-left -->
			<div class="preheader-right">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_preheader_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- preheader-right -->
			<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-center">
				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) { ?>
					<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
					dynamic_sidebar( 'hovercraft_preheader_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
					<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
					dynamic_sidebar( 'hovercraft_preheader_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				<?php } ?>
			</div><!-- preheader-center -->
			<?php } ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- preheader -->
	<?php } ?><!-- if preheader widgets active -->
    
    <?php get_template_part('template-parts/header/navigation'); ?>
</div><!-- header-basic -->
