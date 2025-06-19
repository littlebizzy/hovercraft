<?php

// modify default comment form fields
add_filter( 'comment_form_default_fields', 'hovercraft_comment_fields' );

function hovercraft_comment_fields( $fields ) {
    $commenter  = wp_get_current_commenter();
    $req        = get_option( 'require_name_email' );
    $aria_req   = $req ? " aria-required='true'" : '';
    $required   = $req ? '<span class="required">*</span>' : '';

    $fields['author'] = sprintf(
        '<p class="comment-form-author"><label for="comment-author">%s</label> %s<input id="comment-author" name="author" type="text" value="%s" size="30"%s></p>',
        esc_html__( 'Name', 'hovercraft' ),
        $required,
        esc_attr( $commenter['comment_author'] ),
        $aria_req
    );

    $fields['email'] = sprintf(
        '<p class="comment-form-email"><label for="comment-email">%s</label> %s<input id="comment-email" name="email" type="email" value="%s" size="30"%s></p>',
        esc_html__( 'Email', 'hovercraft' ),
        $required,
        esc_attr( $commenter['comment_author_email'] ),
        $aria_req
    );

    $fields['url'] = sprintf(
        '<p class="comment-form-url"><label for="comment-url">%s</label><input id="comment-url" name="url" type="url" value="%s" size="30"></p>',
        esc_html__( 'Website', 'hovercraft' ),
        esc_attr( $commenter['comment_author_url'] )
    );

    return $fields;
}

// modify default comment form headings
add_filter( 'comment_form_defaults', function( $defaults ) {
    $defaults['title_reply_before'] = '<h3 id="reply-title" class="comment-reply-title">';
    $defaults['title_reply_after']  = '</h3>';
    return $defaults;
});

// allow child themes or plugins to override comment listing args
add_filter( 'hovercraft_comments_args', function( $args ) {
    return $args; // return unmodified by default
});

// Ref: ChatGPT
