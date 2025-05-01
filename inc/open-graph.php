<?php

// output open graph and twitter meta tags for singular content
add_action( 'wp_head', 'hovercraft_open_graph_meta' );

function hovercraft_open_graph_meta() {
    // only run on single posts, pages, or custom post types
    if ( ! is_singular() ) {
        return;
    }

    // get the current post id
    $post_id = get_queried_object_id();

    if ( ! $post_id ) {
        return;
    }

    // output og:title and twitter:title
    $title = get_the_title( $post_id );
    if ( $title ) {
        $title = esc_attr( $title );
        echo '<meta property="og:title" content="' . $title . '">' . "\n";
        echo '<meta name="twitter:title" content="' . $title . '">' . "\n";
    }

    // output og:description and twitter:description
    $description = get_the_excerpt( $post_id );
    if ( $description ) {
        $description = wp_trim_words( $description, 45 );
        $description = esc_attr( $description );
        echo '<meta property="og:description" content="' . $description . '">' . "\n";
        echo '<meta name="twitter:description" content="' . $description . '">' . "\n";
    }

    // output og:url
    $url = get_permalink( $post_id );
    if ( $url ) {
        echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
    }

    // output og:site_name
    $site_name = get_bloginfo( 'name' );
    if ( $site_name ) {
        echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">' . "\n";
    }

    // output og:image and twitter:image
    if ( has_post_thumbnail( $post_id ) ) {
        $image_url = get_the_post_thumbnail_url( $post_id, 'medium_large' );
        if ( $image_url ) {
            $image_url = esc_url( $image_url );
            echo '<meta property="og:image" content="' . $image_url . '">' . "\n";
            echo '<meta name="twitter:image" content="' . $image_url . '">' . "\n";
        }
    }

    // output twitter:card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}

// Ref: ChatGPT
