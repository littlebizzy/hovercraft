<?php

// output og:image meta tag for single posts and pages
add_action( 'wp_head', function() {
	// only run on single posts, pages, or custom post types
	if ( ! is_singular() ) {
		return;
	}

	// get the current post id
	$post_id = get_queried_object_id();

	if ( ! $post_id ) {
		return;
	}

	$image_url = null;

	// get medium_large featured image if it exists
	if ( has_post_thumbnail( $post_id ) ) {
		$image_url = get_the_post_thumbnail_url( $post_id, 'medium_large' );
	}

	// output the og:image meta tag if image is found
	if ( $image_url ) {
		$image_url = esc_url( $image_url );
		echo '<meta property="og:image" content="' . $image_url . '">' . "\n";
	}
} );

// Ref: ChatGPT
