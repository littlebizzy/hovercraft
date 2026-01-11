<?php

// get structured zigzag rows from meta box
$rows = get_post_meta( get_the_ID(), 'hovercraft_zigzag_rows', true );

// use meta box layout if rows exist
if ( ! empty( $rows ) && is_array( $rows ) ) { ?>

	<div class="zigzag-wide-wrapper">

		<?php foreach ( $rows as $index => $row ) :

			// alternate layout
			$class = ( $index % 2 === 0 ) ? 'zigzag-section' : 'zigzag-section-reverse';

			$image_id  = ! empty( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
			$title     = ! empty( $row['title'] ) ? $row['title'] : '';
			$text      = ! empty( $row['text'] ) ? $row['text'] : '';
			$link_url  = ! empty( $row['link_url'] ) ? $row['link_url'] : '';
			$link_text = ! empty( $row['link_text'] ) ? $row['link_text'] : '';
			?>

			<div class="<?php echo esc_attr( $class ); ?>">

				<?php if ( $image_id ) { ?>
					<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
				<?php } ?>

				<?php if ( $title ) { ?>
					<h3><?php echo esc_html( $title ); ?></h3>
				<?php } ?>

				<?php if ( $text ) { ?>
					<?php echo wpautop( esc_html( $text ) ); ?>
				<?php } ?>

				<?php if ( $link_url ) { ?>
					<p>
						<a href="<?php echo esc_url( $link_url ); ?>">
							<?php echo esc_html( $link_text ? $link_text : 'Read more' ); ?>
						</a>
					</p>
				<?php } ?>

				<div class="clear"></div>

			</div>

		<?php endforeach; ?>

	</div>

<?php } else { ?>

	<div class="zigzag-wide-wrapper">

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_one' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_one' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_two' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_two' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_three' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_three' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_four' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_four' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_five' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_five' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_six' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_six' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_seven' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_seven' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_eight' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_eight' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_nine' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_nine' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_ten' ) ) { ?>
			<div class="zigzag-section-reverse">
				<?php dynamic_sidebar( 'hovercraft_zigzag_ten' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_zigzag_eleven' ) ) { ?>
			<div class="zigzag-section">
				<?php dynamic_sidebar( 'hovercraft_zigzag_eleven' ); ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

	</div>

<?php } ?>
