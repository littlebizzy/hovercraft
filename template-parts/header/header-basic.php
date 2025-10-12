<div id="header-basic">

	<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader">
		<div class="inner">

			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>

			<!-- preheader-left -->
			<div class="preheader-left">
				<?php
				// remove widget titles for this sidebar only
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_preheader_left' );
				remove_filter( 'widget_title', '__return_false' );
				?>
			</div>

			<!-- preheader-right -->
			<div class="preheader-right">
				<?php
				// remove widget titles for this sidebar only
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_preheader_right' );
				remove_filter( 'widget_title', '__return_false' );
				?>
			</div>

			<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>

			<!-- preheader-center -->
			<div class="preheader-center">
				<?php
				if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) {
					// remove widget titles for this sidebar only
					add_filter( 'widget_title', '__return_false' );
					dynamic_sidebar( 'hovercraft_preheader_left' );
					remove_filter( 'widget_title', '__return_false' );
				} elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) {
					// remove widget titles for this sidebar only
					add_filter( 'widget_title', '__return_false' );
					dynamic_sidebar( 'hovercraft_preheader_right' );
					remove_filter( 'widget_title', '__return_false' );
				}
				?>
			</div>

			<?php } ?>

			<div class="clear"></div>

		</div><!-- inner -->
	</div><!-- preheader -->
	<?php } ?><!-- if preheader widgets active -->

	<?php get_template_part( 'template-parts/header/navigation' ); ?>

</div><!-- header-basic -->

<!-- Ref: https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar -->
