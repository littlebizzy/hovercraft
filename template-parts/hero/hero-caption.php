<?php

// get featured image caption
$hovercraft_hero_caption = '';

if ( has_post_thumbnail() ) {
	$hovercraft_hero_caption = get_the_post_thumbnail_caption();
}

// get custom header image caption
if ( empty( $hovercraft_hero_caption ) ) {
	$hovercraft_custom_header = get_custom_header();
	$hovercraft_custom_header_attachment_id = 0;

	if ( isset( $hovercraft_custom_header->attachment_id ) ) {
		$hovercraft_custom_header_attachment_id = absint( $hovercraft_custom_header->attachment_id );
	}

	if ( ! empty( $hovercraft_custom_header_attachment_id ) ) {
		$hovercraft_hero_caption = wp_get_attachment_caption( $hovercraft_custom_header_attachment_id );
	}
}

// skip empty hero caption
if ( empty( $hovercraft_hero_caption ) ) {
	return;
}

// render hero caption
?>
<div class="hero-image-caption"><?php echo esc_html( $hovercraft_hero_caption ); ?></div>
