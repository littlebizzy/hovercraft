<?php

// Disable bbPress breadcrumbs
function bm_bbp_no_breadcrumb( $param ) {
    return true;
}
add_filter( 'bbp_no_breadcrumb', 'bm_bbp_no_breadcrumb' );

// https://torquemag.io/2020/09/wordpress-breadcrumbs/
function ah_breadcrumb() {

    // Check if it is the front/home page and return
    // if ( is_front_page() ) {
    //     return;
    // }

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

    if ( is_single() ) {

        // Get post type
        $post_type = get_post_type();

        // If post type is not post
        if ( $post_type != 'post' ) {

            $post_type_object = get_post_type_object( $post_type );
            $post_type_link = get_post_type_archive_link( $post_type );

            echo '<li class="item item-cat"><a href="' . esc_url( $post_type_link ) . '">' . esc_html( $post_type_object->labels->name ) . '</a></li>' . $sep;
        }

        // Get categories
        $category = get_the_category( $post->ID );

        // If category is not empty
        if ( !empty( $category ) ) {

            // Arrange category parent to child
            $category_values = array_values( $category );
            $get_last_category = end( $category_values );
            $get_parent_category = rtrim( get_category_parents( $get_last_category->term_id, true, ',' ), ',' );
            $cat_parent = explode( ',', $get_parent_category );

            // Store category in $display_category
            $display_category = '';
            foreach ( $cat_parent as $p ) {
                $display_category .= '<li class="item item-cat">' . $p . '</li>' . $sep;
            }
        }

        // If it's a custom post type within a custom taxonomy
        $taxonomy_exists = taxonomy_exists( $custom_taxonomy );

        if ( empty( $get_last_category ) && !empty( $custom_taxonomy ) && $taxonomy_exists ) {

            $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
            $cat_id = $taxonomy_terms[0]->term_id;
            $cat_link = get_term_link( $cat_id, $custom_taxonomy );
            $cat_name = $taxonomy_terms[0]->name;
        }

        // Check if the post is in a category
        if ( !empty( $get_last_category ) ) {

            echo $display_category;
            echo '<li class="item item-current">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>';

        } elseif ( !empty( $cat_id ) ) {

            echo '<li class="item item-cat"><a href="' . esc_url( $cat_link ) . '">' . esc_html( $cat_name ) . '</a></li>' . $sep;
            echo '<li class="item-current item">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>';

        } else {

            echo '<li class="item-current item">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>'; // probably remove this later
        }

    } elseif ( is_archive() ) {

        if ( is_tax() ) {
            // Get post type
            $post_type = get_post_type();

            // If post type is not post
            if ( $post_type != 'post' ) {

                $post_type_object = get_post_type_object( $post_type );
                $post_type_link = get_post_type_archive_link( $post_type );

                echo '<li class="item item-cat item-custom-post-type-' . esc_attr( $post_type ) . '"><a href="' . esc_url( $post_type_link ) . '">' . esc_html( $post_type_object->labels->name ) . '</a></li>' . $sep;
            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item item-current">' . esc_html( $custom_tax_name ) . '</li>';

        } elseif ( is_category() ) {

            $parent = get_queried_object()->category_parent;

            if ( $parent !== 0 ) {

                $parent_category = get_category( $parent );
                $category_link = get_category_link( $parent );

                echo '<li class="item"><a href="' . esc_url( $category_link ) . '">' . esc_html( $parent_category->name ) . '</a></li>' . $sep;
            }

            echo '<li class="item item-current">' . single_cat_title( '', false ) . '</li>';

        } elseif ( is_tag() ) {

            // Get tag information
            $term_id = get_query_var( 'tag_id' );
            $taxonomy = 'post_tag';
            $args = array('include' => $term_id );
            $terms = get_terms( $taxonomy, $args );
            $get_term_name = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item">' . esc_html( $get_term_name ) . '</li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item"><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . esc_html( get_the_time( 'Y' ) ) . ' Archives</a></li>' . $sep;

            // Month link
            echo '<li class="item-month item"><a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . esc_html( get_the_time( 'M' ) ) . ' Archives</a></li>' . $sep;

            // Day display
            echo '<li class="item-current item">' . esc_html( get_the_time( 'jS M' ) ) . ' Archives</li>';

        } elseif ( is_month() ) {

            // Month archive

            // Year link
            echo '<li class="item-year item"><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . esc_html( get_the_time( 'Y' ) ) . ' Archives</a></li>' . $sep;

            // Month display
            echo '<li class="item-month item-current item">' . esc_html( get_the_time( 'M' ) ) . ' Archives</li>';

        } elseif ( is_year() ) {

            // Year display
            echo '<li class="item-year item-current item">' . esc_html( get_the_time( 'Y' ) ) . ' Archives</li>';

        } elseif ( is_author() ) {

            // Author archive

            // Get the author information
            $author_id = get_query_var('author');
            $userdata = get_userdata( $author_id );

            // Display author name
            echo '<li class="item-current item">' . esc_html__( 'Author: ', 'hovercraft' ) . esc_html( $userdata->display_name ) . '</li>';

        } else {

            echo '<li class="item item-current">' . post_type_archive_title() . '</li>';
        }

    } elseif ( is_page() ) {

        // Standard page
        if ( $post->post_parent ) {

            // If child page, get parents
            $anc = get_post_ancestors( $post->ID );

            // Get parents in the right order
            $anc = array_reverse( $anc );

            // Parent page loop
            if ( !isset( $parents ) ) {
                $parents = '';
            }
            foreach ( $anc as $ancestor ) {

                $parents .= '<li class="item-parent item"><a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a></li>' . $sep;
            }

            // Display parent pages
            echo $parents;

            // Current page
            echo '<li class="item-current item">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>';

        } else {

            // Just display current page if no parents
            echo '<li class="item-current item">' . esc_html__( 'Go back', 'hovercraft' ) . '</li>';
        }

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
