<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register zigzag meta box
function hovercraft_admin_register_zigzag_meta_box() {
	add_meta_box(
		'hovercraft_zigzag_meta_box',
		esc_html__( 'ZigZag Section (HoverCraft Theme)', 'hovercraft' ),
		'hovercraft_admin_render_zigzag_meta_box',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'hovercraft_admin_register_zigzag_meta_box' );

// check if zigzag meta box should be shown for this page
function hovercraft_admin_should_show_zigzag_meta_box( $post ) {
	$template = get_page_template_slug( $post->ID );

	return 'page-templates/mini-hero-zigzag-no-sidebar.php' === $template;
}

// render zigzag meta box fields
function hovercraft_admin_render_zigzag_meta_box( $post ) {
	if ( ! hovercraft_admin_should_show_zigzag_meta_box( $post ) ) {
		return;
	}

	wp_nonce_field( 'hovercraft_zigzag_meta_box', 'hovercraft_zigzag_meta_box_nonce' );

	echo '<p>' . esc_html__( 'Configure the zigzag layout rows below.', 'hovercraft' ) . '</p>';

	for ( $i = 1; $i <= 15; $i++ ) {
		$image_id = get_post_meta( $post->ID, "hovercraft_zigzag_row_{$i}_image_id", true );
		$title = get_post_meta( $post->ID, "hovercraft_zigzag_row_{$i}_title", true );
		$text = get_post_meta( $post->ID, "hovercraft_zigzag_row_{$i}_text", true );
		$link_url = get_post_meta( $post->ID, "hovercraft_zigzag_row_{$i}_link_url", true );
		$link_text = get_post_meta( $post->ID, "hovercraft_zigzag_row_{$i}_link_text", true );

		echo '<div class="hovercraft-meta-group">';
		echo '<div class="hovercraft-meta-group-header">';
		echo esc_html__( 'Zigzag row', 'hovercraft' ) . ' ' . intval( $i );
		echo '<span class="hovercraft-meta-group-toggle">▸</span>';
		echo '</div>';
		echo '<div class="hovercraft-meta-group-body">';

		// image field
		echo '<p>';
		echo '<label>' . esc_html__( 'Image', 'hovercraft' ) . '</label><br>';
		echo '<input type="hidden" name="hovercraft_zigzag_row_' . intval( $i ) . '_image_id" value="' . esc_attr( $image_id ) . '">';
		echo '<input type="button" class="button hovercraft-zigzag-upload" value="' . esc_attr__( 'Select image', 'hovercraft' ) . '" data-target="hovercraft_zigzag_row_' . intval( $i ) . '_image_id">';
		echo '</p>';

		// title field
		echo '<p>';
		echo '<label>' . esc_html__( 'Title', 'hovercraft' ) . '</label><br>';
		echo '<input type="text" class="widefat" name="hovercraft_zigzag_row_' . intval( $i ) . '_title" value="' . esc_attr( $title ) . '">';
		echo '</p>';

		// text field
		echo '<p>';
		echo '<label>' . esc_html__( 'Text', 'hovercraft' ) . '</label><br>';
		echo '<textarea class="widefat" rows="4" name="hovercraft_zigzag_row_' . intval( $i ) . '_text">' . esc_textarea( $text ) . '</textarea>';
		echo '</p>';

		// link url field
		echo '<p>';
		echo '<label>' . esc_html__( 'Link URL', 'hovercraft' ) . '</label><br>';
		echo '<input type="url" class="widefat" name="hovercraft_zigzag_row_' . intval( $i ) . '_link_url" value="' . esc_attr( $link_url ) . '">';
		echo '</p>';

		// link text field
		echo '<p>';
		echo '<label>' . esc_html__( 'Link text', 'hovercraft' ) . '</label><br>';
		echo '<input type="text" class="widefat" name="hovercraft_zigzag_row_' . intval( $i ) . '_link_text" value="' . esc_attr( $link_text ) . '">';
		echo '</p>';

		echo '</div>';
		echo '</div>';
	}
}

// save zigzag meta box fields
function hovercraft_admin_save_zigzag_meta_box( $post_id ) {
	if ( ! isset( $_POST['hovercraft_zigzag_meta_box_nonce'] ) ) {
		return;
	}

	$nonce = sanitize_text_field( wp_unslash( $_POST['hovercraft_zigzag_meta_box_nonce'] ) );

	if ( ! wp_verify_nonce( $nonce, 'hovercraft_zigzag_meta_box' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$template = get_page_template_slug( $post_id );

	if ( 'page-templates/mini-hero-zigzag-no-sidebar.php' !== $template ) {
		return;
	}

	for ( $i = 1; $i <= 15; $i++ ) {
		$image_id = '';
		$title = '';
		$text = '';
		$link_url = '';
		$link_text = '';

		if ( isset( $_POST["hovercraft_zigzag_row_{$i}_image_id"] ) ) {
			$image_id = absint( wp_unslash( $_POST["hovercraft_zigzag_row_{$i}_image_id"] ) );
		}

		if ( isset( $_POST["hovercraft_zigzag_row_{$i}_title"] ) ) {
			$title = sanitize_text_field( wp_unslash( $_POST["hovercraft_zigzag_row_{$i}_title"] ) );
		}

		if ( isset( $_POST["hovercraft_zigzag_row_{$i}_text"] ) ) {
			$text = sanitize_textarea_field( wp_unslash( $_POST["hovercraft_zigzag_row_{$i}_text"] ) );
		}

		if ( isset( $_POST["hovercraft_zigzag_row_{$i}_link_url"] ) ) {
			$link_url = esc_url_raw( wp_unslash( $_POST["hovercraft_zigzag_row_{$i}_link_url"] ) );
		}

		if ( isset( $_POST["hovercraft_zigzag_row_{$i}_link_text"] ) ) {
			$link_text = sanitize_text_field( wp_unslash( $_POST["hovercraft_zigzag_row_{$i}_link_text"] ) );
		}

		update_post_meta( $post_id, "hovercraft_zigzag_row_{$i}_image_id", $image_id );
		update_post_meta( $post_id, "hovercraft_zigzag_row_{$i}_title", $title );
		update_post_meta( $post_id, "hovercraft_zigzag_row_{$i}_text", $text );
		update_post_meta( $post_id, "hovercraft_zigzag_row_{$i}_link_url", $link_url );
		update_post_meta( $post_id, "hovercraft_zigzag_row_{$i}_link_text", $link_text );
	}
}
add_action( 'save_post', 'hovercraft_admin_save_zigzag_meta_box' );
