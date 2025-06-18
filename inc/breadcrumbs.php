<?php

// disable bbpress default breadcrumb
add_filter( 'bbp_no_breadcrumb', '__return_true' );

// main breadcrumb function
function ah_breadcrumb() {
    echo '<ul id="ah-breadcrumb" class="ah-breadcrumb">';
    ah_breadcrumb_home();

    if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {
        ah_breadcrumb_bbpress();
    } elseif ( is_singular() ) {
        ah_breadcrumb_single();
    } elseif ( is_archive() ) {
        ah_breadcrumb_archive();
    } elseif ( is_page() ) {
        ah_breadcrumb_page();
    } elseif ( is_search() ) {
        ah_breadcrumb_search();
    } elseif ( is_404() ) {
        ah_breadcrumb_404();
    }

    echo '</ul>';
}

function ah_breadcrumb_home() {
    echo '<li class="item"><a href="' . esc_url( home_url() ) . '">' . esc_html__( 'Home', 'hovercraft' ) . '</a></li>';
    echo '<li class="separator">«</li>';
}

function ah_breadcrumb_separator() {
    echo '<li class="separator">«</li>';
}

function ah_breadcrumb_bbpress() {
    echo '<li class="item"><a href="' . esc_url( bbp_get_forums_url() ) . '">' . esc_html__( 'Forum', 'hovercraft' ) . '</a></li>';
    ah_breadcrumb_separator();

    if ( bbp_is_forum_archive() ) {
        echo '<li class="item-current item">' . esc_html__( 'All Forums', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_single_reply() ) {
        $reply_id = bbp_get_reply_id();
        $topic_id = bbp_get_reply_topic_id( $reply_id );
        $forum_id = bbp_get_topic_forum_id( $topic_id );
        ah_breadcrumb_bbpress_ancestors( $forum_id );
        ah_breadcrumb_bbpress_link( $forum_id );
        ah_breadcrumb_bbpress_link( $topic_id );
        echo '<li class="item-current item">' . esc_html__( '« Go back', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_single_topic() ) {
        $forum_id = bbp_get_topic_forum_id();
        ah_breadcrumb_bbpress_ancestors( $forum_id );
        ah_breadcrumb_bbpress_link( $forum_id );
        echo '<li class="item-current item">' . esc_html__( '« Go back', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_single_forum() ) {
        ah_breadcrumb_bbpress_ancestors( get_the_ID() );
        echo '<li class="item-current item">' . esc_html__( '« Go back', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_topic_tag() || bbp_is_single_topic_tag() ) {
        echo '<li class="item-current item">' . esc_html( bbp_get_topic_tag_name() ) . '</li>';
    } elseif ( bbp_is_view() ) {
        echo '<li class="item-current item">' . esc_html( bbp_get_view_title() ) . '</li>';
    } elseif ( bbp_is_search() ) {
        echo '<li class="item-current item">' . esc_html__( 'Search Results', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_user_home() || bbp_is_single_user() ) {
        echo '<li class="item-current item">' . esc_html__( 'User: ', 'hovercraft' ) . esc_html( bbp_get_user_display_name( bbp_get_displayed_user_id() ) ) . '</li>';
    } elseif ( bbp_is_user_edit() ) {
        echo '<li class="item-current item">' . esc_html__( 'Edit Profile', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_user_subscriptions() ) {
        echo '<li class="item-current item">' . esc_html__( 'Subscriptions', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_user_favorites() ) {
        echo '<li class="item-current item">' . esc_html__( 'Favorites', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_user_topics() ) {
        echo '<li class="item-current item">' . esc_html__( 'User Topics', 'hovercraft' ) . '</li>';
    } elseif ( bbp_is_user_replies() ) {
        echo '<li class="item-current item">' . esc_html__( 'User Replies', 'hovercraft' ) . '</li>';
    }
}

function ah_breadcrumb_bbpress_ancestors( $post_id ) {
    $ancestors = array_reverse( get_post_ancestors( $post_id ) );
    foreach ( $ancestors as $ancestor ) {
        echo '<li class="item"><a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a></li>';
        ah_breadcrumb_separator();
    }
}

function ah_breadcrumb_bbpress_link( $post_id ) {
    echo '<li class="item"><a href="' . get_permalink( $post_id ) . '">' . get_the_title( $post_id ) . '</a></li>';
    ah_breadcrumb_separator();
}

function ah_breadcrumb_search() {
    echo '<li class="item-current item">' . esc_html__( 'Search results for: ', 'hovercraft' ) . esc_html( get_search_query() ) . '</li>';
}

function ah_breadcrumb_404() {
    echo '<li class="item-current item">' . esc_html__( 'Error 404', 'hovercraft' ) . '</li>';
}

function ah_breadcrumb_single() {
    global $post;
    $post_type = get_post_type();
    if ( $post_type !== 'post' ) {
        $obj = get_post_type_object( $post_type );
        if ( $obj && ! empty( $obj->has_archive ) ) {
            echo '<li class="item"><a href="' . esc_url( get_post_type_archive_link( $post_type ) ) . '">' . esc_html( $obj->labels->name ) . '</a></li>';
            ah_breadcrumb_separator();
        }
    }
    $cats = get_the_category( $post->ID );
    if ( $cats ) {
        $cat = end( $cats );
        $parents = explode( ',', rtrim( get_category_parents( $cat->term_id, true, ',' ), ',' ) );
        foreach ( $parents as $p ) {
            echo '<li class="item item-cat">' . $p . '</li>';
            ah_breadcrumb_separator();
        }
    }
    echo '<li class="item-current item">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>';
}

function ah_breadcrumb_archive() {
    if ( is_category() ) {
        $cat = get_queried_object();
        if ( $cat->category_parent ) {
            $parent = get_category( $cat->category_parent );
            echo '<li class="item"><a href="' . get_category_link( $parent ) . '">' . esc_html( $parent->name ) . '</a></li>';
            ah_breadcrumb_separator();
        }
        echo '<li class="item-current item">' . single_cat_title( '', false ) . '</li>';
    } elseif ( is_tag() ) {
        echo '<li class="item-current item">' . single_tag_title( '', false ) . '</li>';
    } elseif ( is_author() ) {
        $author = get_userdata( get_query_var( 'author' ) );
        echo '<li class="item-current item">' . esc_html__( 'Author: ', 'hovercraft' ) . esc_html( $author->display_name ) . '</li>';
    } elseif ( is_year() ) {
        echo '<li class="item-current item">' . get_the_time( 'Y' ) . ' Archives</li>';
    } elseif ( is_month() ) {
        echo '<li class="item"><a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . ' Archives</a></li>';
        ah_breadcrumb_separator();
        echo '<li class="item-current item">' . get_the_time( 'F' ) . ' Archives</li>';
    } elseif ( is_day() ) {
        echo '<li class="item"><a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . ' Archives</a></li>';
        ah_breadcrumb_separator();
        echo '<li class="item"><a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . ' Archives</a></li>';
        ah_breadcrumb_separator();
        echo '<li class="item-current item">' . get_the_time( 'jS' ) . ' Archives</li>';
    } elseif ( is_post_type_archive() ) {
        echo '<li class="item-current item">' . post_type_archive_title( '', false ) . '</li>';
    } elseif ( is_tax() ) {
        echo '<li class="item-current item">' . single_term_title( '', false ) . '</li>';
    }
}

function ah_breadcrumb_page() {
    global $post;
    if ( $post->post_parent ) {
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        foreach ( $ancestors as $ancestor ) {
            echo '<li class="item"><a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a></li>';
            ah_breadcrumb_separator();
        }
    }
    echo '<li class="item-current item">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>';
}

// Ref: ChatGPT
// Ref: // https://torquemag.io/2020/09/wordpress-breadcrumbs/
