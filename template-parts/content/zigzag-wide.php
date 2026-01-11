<?php

// check if meta-based zigzag rows have content
$has_meta_rows = false;

for ( $i = 1; $i <= 15; $i++ ) {
	$title = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_title', true );
	$text  = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_text', true );

	if ( $title || $text ) {
		$has_meta_rows = true;
		break;
	}
}

// check if sidebar-based zigzag rows have content
$has_sidebar_rows = false;

$zigzag_sidebars = array(
	'hovercraft_zigzag_one',
	'hovercraft_zigzag_two',
	'hovercraft_zigzag_three',
	'hovercraft_zigzag_four',
	'hovercraft_zigzag_five',
	'hovercraft_zigzag_six',
	'hovercraft_zigzag_seven',
	'hovercraft_zigzag_eight',
	'hovercraft_zigzag_nine',
	'hovercraft_zigzag_ten',
	'hovercraft_zigzag_eleven'
);

foreach ( $zigzag_sidebars as $sidebar_id ) {
	if ( is_active_sidebar( $sidebar_id ) ) {
		$has_sidebar_rows = true;
		break;
	}
}

// nothing to render
if ( ! $has_meta_rows && ! $has_sidebar_rows ) {
	return;
}
?>

<div class="zigzag-wide-wrapper">

	<?php
	// meta box layout first
	if ( $has_meta_rows ) {

		for ( $i = 1; $i <= 15; $i++ ) {

			$image_id  = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_image_id', true );
			$title     = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_title', true );
			$text      = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_text', true );
			$link_url  = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_link_url', true );
			$link_text = get_post_meta( get_the_ID(), 'hovercraft_zigzag_row_' . $i . '_link_text', true );

			if ( ! $title && ! $text ) {
				continue;
			}

			$class = ( $i % 2 === 1 ) ? 'zigzag-section' : 'zigzag-section-reverse';
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

		<?php }

	// sidebar fallback
	} else {

		foreach ( $zigzag_sidebars as $index => $sidebar_id ) {

			if ( ! is_active_sidebar( $sidebar_id ) ) {
				continue;
			}

			$class = ( $index % 2 === 0 ) ? 'zigzag-section' : 'zigzag-section-reverse';
			?>

			<div class="<?php echo esc_attr( $class ); ?>">
				<?php dynamic_sidebar( $sidebar_id ); ?>
				<div class="clear"></div>
			</div>

		<?php }
	}
	?>

</div>
