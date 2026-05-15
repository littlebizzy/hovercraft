<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// renders hero image caption when available
$hero_caption = '';

if ( has_post_thumbnail() ) {
	$hero_caption = get_the_post_thumbnail_caption();
}

if ( empty( $hero_caption ) ) {
	$custom_header = get_custom_header();
	$custom_header_attachment_id = 0;

	if ( isset( $custom_header->attachment_id ) ) {
		$custom_header_attachment_id = absint( $custom_header->attachment_id );
	}

	if ( ! empty( $custom_header_attachment_id ) ) {
		$hero_caption = wp_get_attachment_caption( $custom_header_attachment_id );
	}
}

if ( empty( $hero_caption ) ) {
	return;
}
?>
<div class="hero-image-caption"><?php echo esc_html( $hero_caption ); ?></div>
