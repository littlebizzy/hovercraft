<?php

// Disable bbPress breadcrumbs
function bm_bbp_no_breadcrumb( $param ) {
    return true;
}
add_filter( 'bbp_no_breadcrumb', 'bm_bbp_no_breadcrumb' );

// breadcrumps function
function ah_breadcrumb() {

    // Define
    global $post;
    $custom_taxonomy = ''; // If you have custom taxonomy, place it here.

    $defaults = array(
        'separator'   => '«',
        'id'          => 'ah-breadcrumb',
        'classes'     => 'ah-breadcrumb',
        'home_title'  => esc_html__( 'Home', 'hovercraft' ),
    );

    $sep = '<li class="separator">' . esc_html( $defaults['separator'] ) . '</li>';

    // Start the breadcrumb with a link to your homepage
    echo '<ul id="' . esc_attr( $defaults['id'] ) . '" class="' . esc_attr( $defaults['classes'] ) . '">';

    // Creating home link
    echo '<li class="item"><a href="' . esc_url( get_home_url() ) . '">' . esc_html( $defaults['home_title'] ) . '</a></li>' . $sep;

    // Check for bbPress-specific content
    if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {

        // Forum homepage link
        echo '<li class="item"><a href="' . esc_url( bbp_get_forums_url() ) . '">' . esc_html__( 'Forum', 'hovercraft' ) . '</a></li>' . $sep;

        // Check if it is a forum archive (list of all forums)
        if ( bbp_is_forum_archive() ) {
            echo '<li class="item-current item">' . esc_html__( 'All Forums', 'hovercraft' ) . '</li>';

        // Check if it's a single forum or topic
        } elseif ( bbp_is_single_forum() || bbp_is_single_topic() ) {

            if ( bbp_is_single_topic() ) {

                // Get the forum the topic belongs to
                $forum_id = bbp_get_topic_forum_id();

                if ( $forum_id ) {
                    $ancestors = get_post_ancestors( $forum_id );
                    $ancestors = array_reverse( $ancestors );

                    // Display parent forums (if any)
                    foreach ( $ancestors as $ancestor ) {
                        echo '<li class="item"><a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a></li>' . $sep;
                    }

                    // Display current forum
                    echo '<li class="item"><a href="' . esc_url( get_permalink( $forum_id ) ) . '">' . esc_html( get_the_title( $forum_id ) ) . '</a></li>' . $sep;
                }

                // Current topic (no link, just Go back)
                echo '<li class="item-current item">' . esc_html__( '« Go back', 'hovercraft' ) . '</li>';

            } elseif ( bbp_is_single_forum() ) {

                // Display parent forums (if any)
                $ancestors = get_post_ancestors( get_the_ID() );
                $ancestors = array_reverse( $ancestors );

                foreach ( $ancestors as $ancestor ) {
                    echo '<li class="item"><a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a></li>' . $sep;
                }

                // Current forum
                echo '<li class="item-current item">' . esc_html__( '« Go back', 'hovercraft' ) . '</li>';
            }

        } elseif ( bbp_is_topic_archive() ) {

            // Topic archive (list of all topics)
            echo '<li class="item-current item">' . esc_html__( 'All Topics', 'hovercraft' ) . '</li>';

        } elseif ( bbp_is_single_reply() ) {

            // Reply belongs to a topic, so we need to trace back to the topic and forum
            $reply_id = bbp_get_reply_id();
            $topic_id = bbp_get_reply_topic_id( $reply_id );
            $forum_id = bbp_get_topic_forum_id( $topic_id );

            // Get ancestors (parent forums, if any)
            $ancestors = get_post_ancestors( $forum_id );
            $ancestors = array_reverse( $ancestors );

            // Loop through parent forums
            foreach ( $ancestors as $ancestor ) {
                echo '<li class="item"><a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a></li>' . $sep;
            }

            // Display current forum and topic
            echo '<li class="item"><a href="' . esc_url( get_permalink( $forum_id ) ) . '">' . esc_html( get_the_title( $forum_id ) ) . '</a></li>' . $sep;
            echo '<li class="item"><a href="' . esc_url( get_permalink( $topic_id ) ) . '">' . esc_html( get_the_title( $topic_id ) ) . '</a></li>' . $sep;

            // Current reply (no link, just Go back)
            echo '<li class="item-current item">' . esc_html__( '« Go back', 'hovercraft' ) . '</li>';

        } elseif ( bbp_is_user_home() || bbp_is_single_user() ) {

            // User profile
            $user_id = bbp_get_displayed_user_id();
            $user_display_name = bbp_get_user_display_name( $user_id );

            echo '<li class="item-current item">' . esc_html__( 'User: ', 'hovercraft' ) . esc_html( $user_display_name ) . '</li>';

        } elseif ( bbp_is_search() ) {

            // bbPress search results
            echo '<li class="item-current item">' . esc_html__( 'Search Results', 'hovercraft' ) . '</li>';

        } elseif ( bbp_is_topic_tag() ) {

            // Topic tag archives
            $tag_name = bbp_get_topic_tag_name();
            echo '<li class="item-current item">' . esc_html( $tag_name ) . '</li>';

        } elseif ( bbp_is_view() ) {

            // Custom views in bbPress (e.g., "Most popular topics")
            $view_name = bbp_get_view_title();
            echo '<li class="item-current item">' . esc_html( $view_name ) . '</li>';
        }

    } elseif ( is_single() ) {
        // Your existing single post logic
        // ...

    } elseif ( is_archive() ) {
        // Your existing archive logic
        // ...

    } elseif ( is_page() ) {
        // Your existing page logic
        // ...

    } elseif ( is_search() ) {
        // Search results page
        echo '<li class="item-current item">' . esc_html__( 'Search results for: ', 'hovercraft' ) . esc_html( get_search_query() ) . '</li>';

    } elseif ( is_404() ) {
        // 404 page
        echo '<li class="item-current item">' . esc_html__( 'Error 404', 'hovercraft' ) . '</li>';
    }

    // End breadcrumb
    echo '</ul>';
}

// Ref: ChatGPT
// Ref: // https://torquemag.io/2020/09/wordpress-breadcrumbs/
