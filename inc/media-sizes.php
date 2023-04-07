<?php

// large should be 1200 x 1200 and medium 480 x 480
// medium-large 768 x auto is also used by HoverCraft

// large_size_w
// large_size_h
// medium_size_w
// medium_size_h

function hovercraft_verify_media_sizes() {
    
    $media_large_width = get_option( 'large_size_w' );

    if ( $media_large_width != '1200' ) { ?>

        <div class="notice notice-warning">
        <p><strong>Adjust Media Sizes</strong></p>
        <p>The HoverCraft theme requires the Large size to be 1200px for Max Width and Max Height.</p>
		<p><a href="/options-media.php">Review Settings</a></p>
		</div>

    <?php }
    
}

add_action( 'admin_notices', 'hovercraft_verify_media_sizes' );

// https://www.ilovewp.com/wordpress-image-sizes-a-ticking-time-bomb/
// https://www.fixrunner.com/how-to-fix-media-query-not-working-in-wordpress/
// https://stackoverflow.com/questions/46236906/wordpress-redux-framework-media-queries
// https://www.freecodecamp.org/news/css-media-queries-breakpoints-media-types-standard-resolutions-and-more/
// https://developer.wordpress.org/reference/functions/get_option/
