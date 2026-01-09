function hovercraft_sanitize_checkbox( $value ) {
	return (bool) $value;
}

function hovercraft_sanitize_zigzag_rows( $rows ) {

	if ( ! is_array( $rows ) ) {
		return array();
	}

	$sanitized = array();

	foreach ( $rows as $row ) {

		$sanitized[] = array(
			'image_id'  => isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0,
			'title'     => isset( $row['title'] ) ? sanitize_text_field( $row['title'] ) : '',
			'text'      => isset( $row['text'] ) ? wp_kses_post( $row['text'] ) : '',
			'link_url'  => isset( $row['link_url'] ) ? esc_url_raw( $row['link_url'] ) : '',
			'link_text' => isset( $row['link_text'] ) ? sanitize_text_field( $row['link_text'] ) : '',
		);
	}

	return $sanitized;
}

// Ref: ChatGPT
