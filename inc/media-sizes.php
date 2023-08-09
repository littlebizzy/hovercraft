<?php

// large should be 1200 x whatever and medium 480 x whatever
// medium-large 768 x auto (0) is also used by HoverCraft

// large_size_w
// large_size_h
// medium_size_w
// medium_size_h

function hovercraft_verify_media_sizes() {
    
    $large_width = get_option( 'large_size_w' );
	$large_height = get_option( 'large_size_h' );
	$medium_width = get_option( 'medium_size_w' );
	$medium_height = get_option( 'medium_size_h' );
	$medium_large_width = get_option( 'medium_large_size_w' );
	$medium_large_height = get_option( 'medium_large_size_h' );

    if ( $large_width != '1200' || $medium_width != '480' || $medium_large_width != '768' ) { ?>

        <div class="notice notice-warning">
        <p><strong>Adjust Media Sizes</strong></p>
        <p>The HoverCraft theme requires Large size images to have a Max Width of 1200, Medium size images to have a Max Width of 480, and Medium Large size images to have a Max Width of 768.</p>
		<p><a href="/wp-admin/options-media.php">Review Settings</a></p>
		</div>

    <?php }
    
}

add_action( 'admin_notices', 'hovercraft_verify_media_sizes' );

// https://www.ilovewp.com/wordpress-image-sizes-a-ticking-time-bomb/
// https://www.fixrunner.com/how-to-fix-media-query-not-working-in-wordpress/
// https://stackoverflow.com/questions/46236906/wordpress-redux-framework-media-queries
// https://www.freecodecamp.org/news/css-media-queries-breakpoints-media-types-standard-resolutions-and-more/
// https://developer.wordpress.org/reference/functions/get_option/
// https://wordpress.stackexchange.com/questions/216595/change-size-and-crop-medium-large-images
// https://wordpress.org/support/topic/medium_large-image-size-is-still-generated-even-if-set-to-0/
