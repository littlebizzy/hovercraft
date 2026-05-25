<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// meta box controls

// check whether the title is hidden
function hovercraft_is_title_hidden( $post_id = 0 ) {
	if ( $post_id ) {
		$post_id = absint( $post_id );
	} else {
		$post_id = get_the_ID();
	}

	if ( empty( $post_id ) ) {
		return false;
	}

	$hide_title_status = get_post_meta( $post_id, '_hovercraft_hide_title', true );

	if ( '' === $hide_title_status ) {
		$hide_title_status = get_post_meta( $post_id, '_mysite_meta_hide_title', true );
	}

	return 'on' === $hide_title_status;
}

// register page title meta box
function hovercraft_page_metabox() {
	add_meta_box(
		'hovercraft-hide-title',
		esc_html__( 'HoverCraft Theme', 'hovercraft' ),
		'hovercraft_hide_title_callback',
		'page',
		'side',
		'high'
	);
}
// load page title meta box
add_action( 'add_meta_boxes', 'hovercraft_page_metabox' );

// render page title meta box field
function hovercraft_hide_title_callback( $post ) {
	wp_nonce_field( 'hovercraft_hide_title_action', 'hovercraft_hide_title_nonce' );

	$value = get_post_meta( $post->ID, '_hovercraft_hide_title', true );

	if ( '' === $value ) {
		$value = get_post_meta( $post->ID, '_mysite_meta_hide_title', true );
	}
	?>
	<p>
		<label for="hovercraft-hide-title">
			<input type="checkbox" id="hovercraft-hide-title" name="hovercraft_hide_title" <?php checked( $value, 'on' ); ?>>
			<?php esc_html_e( 'Hide Page Title', 'hovercraft' ); ?>
		</label>
	</p>
	<?php
}

// save page title meta box field
function hovercraft_save_postdata( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! isset( $_POST['hovercraft_hide_title_nonce'] ) ) {
		return;
	}

	$nonce = sanitize_text_field( wp_unslash( $_POST['hovercraft_hide_title_nonce'] ) );

	if ( ! wp_verify_nonce( $nonce, 'hovercraft_hide_title_action' ) ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['hovercraft_hide_title'] ) || isset( $_POST['hide'] ) ) {
		update_post_meta( $post_id, '_hovercraft_hide_title', 'on' );
		update_post_meta( $post_id, '_mysite_meta_hide_title', 'on' );
	} else {
		update_post_meta( $post_id, '_hovercraft_hide_title', 'off' );
		update_post_meta( $post_id, '_mysite_meta_hide_title', 'off' );
	}
}
// save title visibility setting
add_action( 'save_post', 'hovercraft_save_postdata' );
