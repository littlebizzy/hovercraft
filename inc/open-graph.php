<?php

// output og:image meta tag for single posts and pages
add_action( 'wp_head', function() {
	if ( ! is_singular() ) {
		return;
	}

	global $post;
	$image_url = null;

	if ( has_post_thumbnail( $post->ID ) ) {
		$image_url = get_the_post_thumbnail_url( $post->ID, 'medium_large' );
	} elseif ( preg_match( '/<img[^>]+src="([^">]+)"/i', $post->post_content, $matches ) ) {
		$image_url = $matches[1];
	}

	if ( $image_url ) {
		$image_url = esc_url( $image_url );
		echo '<meta property="og:image" content="' . $image_url . '">' . "\n";
	}
} );

// Ref: ChatGPT
