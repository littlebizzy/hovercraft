<?php

// large should be 1200 x 1200 and medium 480 x 480
// medium-large 768 x auto is also used by HoverCraft

// large_size_w
// large_size_h
// medium_size_w
// medium_size_h

function hovercraft_verify_media_sizes() {
    
    $large_width = get_option( 'large_size_w' );
	$large_height = get_option( 'large_size_h' );
	$medium_width = get_option( 'medium_size_w' );
	$medium_height = get_option( 'medium_size_h' );

    if ( $large_width != '1200' || $medium_width != '480' ) { ?>

        <div class="notice notice-warning">
        <p><strong>Adjust Media Sizes</strong></p>
        <p>The HoverCraft theme requires the Large image size to have a Max Width of 1200 and the Medium image size to have a Max Width of 480.</p>
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
