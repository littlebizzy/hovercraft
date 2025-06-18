<?php

// disable bbpress default breadcrumb
add_filter( 'bbp_no_breadcrumb', '__return_true' );

function ah_breadcrumb() {
    echo '<ul id="ah-breadcrumb" class="ah-breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
    ah_breadcrumb_home();

    if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {
        ah_breadcrumb_bbpress();
    } elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
        ah_breadcrumb_woocommerce();
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

function ah_breadcrumb_item( $url, $name, $position, $is_current = false ) {
    $class = $is_current ? 'item-current item' : 'item';
    echo '<li class="' . esc_attr( $class ) . '" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    if ( $url && ! $is_current ) {
        echo '<a href="' . esc_url( $url ) . '" itemprop="item">';
        echo '<span itemprop="name">' . esc_html( $name ) . '</span>';
        echo '</a>';
    } else {
        echo '<span itemprop="name">' . esc_html( $name ) . '</span>';
    }
    echo '<meta itemprop="position" content="' . intval( $position ) . '" />';
    echo '</li>';
    ah_breadcrumb_separator();
}

function ah_breadcrumb_separator() {
    echo '<li class="separator">«</li>';
}

function ah_breadcrumb_home() {
    $GLOBALS['ah_position'] = 1;
    ah_breadcrumb_item( home_url(), __( 'Home', 'hovercraft' ), $GLOBALS['ah_position']++ );
}

function ah_breadcrumb_bbpress() {
    $pos =& $GLOBALS['ah_position'];
    ah_breadcrumb_item( bbp_get_forums_url(), __( 'Forum', 'hovercraft' ), $pos++ );

    if ( bbp_is_forum_archive() ) {
        ah_breadcrumb_item( '', __( 'All Forums', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_single_reply() ) {
        $reply_id = bbp_get_reply_id();
        $topic_id = bbp_get_reply_topic_id( $reply_id );
        $forum_id = bbp_get_topic_forum_id( $topic_id );
        ah_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
        ah_breadcrumb_item( get_permalink( $topic_id ), get_the_title( $topic_id ), $pos++ );
        ah_breadcrumb_item( '', __( '« Go back', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_single_topic() ) {
        $forum_id = bbp_get_topic_forum_id();
        ah_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
        ah_breadcrumb_item( '', __( '« Go back', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_single_forum() ) {
        ah_breadcrumb_bbpress_hierarchy( get_the_ID(), $pos );
        ah_breadcrumb_item( '', __( '« Go back', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_topic_tag() || bbp_is_single_topic_tag() ) {
        ah_breadcrumb_item( '', bbp_get_topic_tag_name(), $pos++, true );
    } elseif ( bbp_is_view() ) {
        ah_breadcrumb_item( '', bbp_get_view_title(), $pos++, true );
    } elseif ( bbp_is_search() ) {
        ah_breadcrumb_item( '', __( 'Search Results', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_user_home() || bbp_is_single_user() ) {
        ah_breadcrumb_item( '', __( 'User: ', 'hovercraft' ) . bbp_get_user_display_name( bbp_get_displayed_user_id() ), $pos++, true );
    } elseif ( bbp_is_user_edit() ) {
        ah_breadcrumb_item( '', __( 'Edit Profile', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_user_subscriptions() ) {
        ah_breadcrumb_item( '', __( 'Subscriptions', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_user_favorites() ) {
        ah_breadcrumb_item( '', __( 'Favorites', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_user_topics() ) {
        ah_breadcrumb_item( '', __( 'User Topics', 'hovercraft' ), $pos++, true );
    } elseif ( bbp_is_user_replies() ) {
        ah_breadcrumb_item( '', __( 'User Replies', 'hovercraft' ), $pos++, true );
    }
}

function ah_breadcrumb_bbpress_hierarchy( $post_id, &$position ) {
    $ancestors = array_reverse( get_post_ancestors( $post_id ) );
    foreach ( $ancestors as $ancestor ) {
        ah_breadcrumb_item( get_permalink( $ancestor ), get_the_title( $ancestor ), $position++ );
    }
    ah_breadcrumb_item( get_permalink( $post_id ), get_the_title( $post_id ), $position++ );
}

function ah_breadcrumb_cpt_fallback( $post_type ) {
    $fallback = array(
        'book' => array( 'url' => '/library/', 'label' => 'Library' ),
        // add more custom types here
    );
    return $fallback[ $post_type ] ?? false;
}

function ah_breadcrumb_single() {
    global $post;
    $pos =& $GLOBALS['ah_position'];
    $post_type = get_post_type();

    if ( $post_type !== 'post' ) {
        $obj = get_post_type_object( $post_type );
        if ( $obj && ! empty( $obj->has_archive ) ) {
            ah_breadcrumb_item( get_post_type_archive_link( $post_type ), $obj->labels->name, $pos++ );
        } else {
            $fallback = ah_breadcrumb_cpt_fallback( $post_type );
            if ( $fallback ) {
                ah_breadcrumb_item( $fallback['url'], $fallback['label'], $pos++ );
            }
        }
    }

    $cats = get_the_category( $post->ID );
    if ( $cats ) {
        $cat = end( $cats );
        $parents = explode( ',', rtrim( get_category_parents( $cat->term_id, true, ',' ), ',' ) );
        foreach ( $parents as $p ) {
            ah_breadcrumb_item( '', strip_tags( $p ), $pos++ );
        }
    }

    ah_breadcrumb_item( '', get_the_title(), $pos++, true );
}

function ah_breadcrumb_archive() {
    $pos =& $GLOBALS['ah_position'];

    if ( is_category() ) {
        $cat = get_queried_object();
        if ( $cat->category_parent ) {
            $parent = get_category( $cat->category_parent );
            ah_breadcrumb_item( get_category_link( $parent ), $parent->name, $pos++ );
        }
        ah_breadcrumb_item( '', single_cat_title( '', false ), $pos++, true );

    } elseif ( is_tag() ) {
        ah_breadcrumb_item( '', single_tag_title( '', false ), $pos++, true );

    } elseif ( is_tax() ) {
        $term = get_queried_object();
        $ancestors = get_ancestors( $term->term_id, $term->taxonomy );
        $ancestors = array_reverse( $ancestors );
        foreach ( $ancestors as $ancestor_id ) {
            $ancestor = get_term( $ancestor_id, $term->taxonomy );
            ah_breadcrumb_item( get_term_link( $ancestor ), $ancestor->name, $pos++ );
        }
        ah_breadcrumb_item( '', $term->name, $pos++, true );

    } elseif ( is_author() ) {
        $author = get_userdata( get_query_var( 'author' ) );
        ah_breadcrumb_item( '', __( 'Author: ', 'hovercraft' ) . $author->display_name, $pos++, true );

    } elseif ( is_year() ) {
        ah_breadcrumb_item( '', get_the_time( 'Y' ) . ' Archives', $pos++, true );

    } elseif ( is_month() ) {
        ah_breadcrumb_item( get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) . ' Archives', $pos++ );
        ah_breadcrumb_item( '', get_the_time( 'F' ) . ' Archives', $pos++, true );

    } elseif ( is_day() ) {
        ah_breadcrumb_item( get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) . ' Archives', $pos++ );
        ah_breadcrumb_item( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ), get_the_time( 'F' ) . ' Archives', $pos++ );
        ah_breadcrumb_item( '', get_the_time( 'jS' ) . ' Archives', $pos++, true );

    } elseif ( is_post_type_archive() ) {
        ah_breadcrumb_item( '', post_type_archive_title( '', false ), $pos++, true );
    }
}

function ah_breadcrumb_page() {
    global $post;
    $pos =& $GLOBALS['ah_position'];

    if ( $post->post_parent ) {
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        foreach ( $ancestors as $ancestor ) {
            ah_breadcrumb_item( get_permalink( $ancestor ), get_the_title( $ancestor ), $pos++ );
        }
    }

    ah_breadcrumb_item( '', get_the_title(), $pos++, true );
}

function ah_breadcrumb_search() {
    $pos =& $GLOBALS['ah_position'];
    ah_breadcrumb_item( '', __( 'Search results for: ', 'hovercraft' ) . get_search_query(), $pos++, true );
}

function ah_breadcrumb_404() {
    $pos =& $GLOBALS['ah_position'];
    ah_breadcrumb_item( '', __( 'Error 404', 'hovercraft' ), $pos++, true );
}

// Ref: ChatGPT
// Ref: // https://torquemag.io/2020/09/wordpress-breadcrumbs/
