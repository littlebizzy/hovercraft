<?php

function hovercraft_render_zigzag() {

	if ( ! get_theme_mod( 'hovercraft_zigzag_enabled' ) ) {
		return;
	}

	$rows = get_theme_mod( 'hovercraft_zigzag_rows', array() );

	if ( empty( $rows ) || ! is_array( $rows ) ) {
		return;
	}

	echo '<div class="zigzag-wide-wrapper">';

	$index = 0;

	foreach ( $rows as $row ) {

		$image_id = isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
		$title    = isset( $row['title'] ) ? $row['title'] : '';
		$text     = isset( $row['text'] ) ? $row['text'] : '';
		$link_url = isset( $row['link_url'] ) ? $row['link_url'] : '';
		$link_txt = isset( $row['link_text'] ) ? $row['link_text'] : '';

		$class = ( $index % 2 === 0 ) ? 'zigzag-section' : 'zigzag-section-reverse';

		echo '<div class="' . esc_attr( $class ) . '">';

		if ( $image_id ) {
			echo wp_get_attachment_image( $image_id, 'large' );
		}

		if ( $title ) {
			echo '<h3>' . esc_html( $title ) . '</h3>';
		}

		if ( $text ) {
			echo wpautop( wp_kses_post( $text ) );
		}

		if ( $link_url ) {
			$label = $link_txt ? $link_txt : 'Read more...';
			echo '<p><a href="' . esc_url( $link_url ) . '">' . esc_html( $label ) . '</a></p>';
		}

		echo '<div class="clear"></div>';
		echo '</div>';

		$index++;
	}

	echo '</div>';
}

// Ref: ChatGPT
