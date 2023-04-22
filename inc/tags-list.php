<?php

function wpdocs_show_tags() {
    $post_tags = get_the_tags();
    $separator = ', ';
    $output = '';

    if ( ! empty( $post_tags ) ) {
        foreach ( $post_tags as $tag ) {
            $output .= '<a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">' . __( $tag->name ) . '</a>' . $separator;
        }
    }

    return trim( $output, $separator );
}

// https://developer.wordpress.org/reference/functions/get_the_tags/
