<?php

// prefer new zigzag layout module if enabled
if ( function_exists( 'hovercraft_render_zigzag' ) && get_theme_mod( 'hovercraft_zigzag_enabled' ) ) {
	hovercraft_render_zigzag();
	return;
}

?>

<div class="zigzag-wide-wrapper">

	<?php if ( is_active_sidebar( 'hovercraft_widget_area_zigzag' ) ) { ?>

		<?php dynamic_sidebar( 'hovercraft_widget_area_zigzag' ); ?>

	<?php } else { ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_one' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_one' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_two' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_two' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section-reverse -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_three' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_three' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_four' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_four' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section-reverse -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_five' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_five' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_six' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_six' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section-reverse -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_seven' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_seven' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_eight' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_eight' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section-reverse -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_nine' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_nine' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_ten' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_ten' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section-reverse -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_eleven' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_eleven' ); ?>
				<div class="clear"></div>
			</div><!-- zigzag-section -->
		<?php } ?>

	<?php } ?>

</div><!-- zigzag-wide-wrapper -->
