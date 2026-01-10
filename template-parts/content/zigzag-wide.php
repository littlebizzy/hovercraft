<?php

// attempt to load structured zigzag rows from post meta
$rows = get_post_meta( get_the_ID(), 'hovercraft_zigzag_rows', true );

// if structured zigzag data exists, render the new fields-based layout
if ( ! empty( $rows ) && is_array( $rows ) ) { ?>

	<div class="zigzag-wide-wrapper">

		<?php foreach ( $rows as $index => $row ) :

			// alternate section layout for zigzag effect
			$class = ( $index % 2 === 0 ) ? 'zigzag-section' : 'zigzag-section-reverse';

			// extract row fields
			$image_id  = isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
			$title     = isset( $row['title'] ) ? $row['title'] : '';
			$text      = isset( $row['text'] ) ? $row['text'] : '';
			$link_url  = isset( $row['link_url'] ) ? $row['link_url'] : '';
			$link_text = isset( $row['link_text'] ) ? $row['link_text'] : '';
			?>

			<div class="<?php echo esc_attr( $class ); ?>">

				<?php if ( $image_id ) : ?>
					<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
				<?php endif; ?>

				<?php if ( $title ) : ?>
					<h3><?php echo esc_html( $title ); ?></h3>
				<?php endif; ?>

				<?php if ( $text ) : ?>
					<?php echo wpautop( esc_html( $text ) ); ?>
				<?php endif; ?>

				<?php if ( $link_url ) : ?>
					<p>
						<a href="<?php echo esc_url( $link_url ); ?>">
							<?php echo esc_html( $link_text ? $link_text : 'Read more' ); ?>
						</a>
					</p>
				<?php endif; ?>

				<div class="clear"></div>

			</div>

		<?php endforeach; ?>

	</div><!-- zigzag-wide-wrapper -->

<?php } else { ?>

	<?php
	// fallback to legacy widget-based zigzag layout
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

<?php } ?>
