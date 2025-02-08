<?php

// skip if post is password-protected
if ( post_password_required() ) return;
?>

<div id="comments" class="comments-area">
    <?php 
    // check if there are comments before displaying them
    if ( get_comments_number() > 0 && have_comments() ) : ?>
        <h3 class="comments-title">
            <?php 
            // display comment count with post title
            printf( esc_html( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'hovercraft' ) ), 
                number_format_i18n( get_comments_number() ), '<span>' . esc_html( get_the_title() ) . '</span>' ); ?>
        </h3>

        <ol class="comment-list">
            <?php 
            // display comments
            wp_list_comments( array( 'style' => 'ol', 'short_ping' => true, 'avatar_size' => 74 ) ); ?>
        </ol>

        <?php 
        // check for multi-page comments
        if ( get_comment_pages_count() > 1 ) : ?>
            <nav class="navigation comment-navigation">
                <p class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'hovercraft' ); ?></p>
                <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'hovercraft' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'hovercraft' ) ); ?></div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php 
    // check if comments are closed but still exist
    if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hovercraft' ); ?></p>
    <?php endif; ?>

    <?php 
    // display comment form
    comment_form(); ?>
</div>

<?php

// prevent duplicate filter registration
remove_filter( 'comment_form_default_fields', 'custom_comment_fields' );
add_filter( 'comment_form_default_fields', 'custom_comment_fields', 10, 1 );

function custom_comment_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = $req ? " aria-required='true'" : '';
    $required = $req ? '<span class="required">*</span>' : '';

    // set author field
    $fields['author'] = sprintf( '<p class="comment-form-author"><label for="comment-author">%s</label> %s<input id="comment-author" name="author" type="text" value="%s" size="30"%s /></p>',
        esc_html__( 'Name', 'hovercraft' ), $required, esc_attr( $commenter['comment_author'] ), $aria_req );

    // set email field
    $fields['email'] = sprintf( '<p class="comment-form-email"><label for="comment-email">%s</label> %s<input id="comment-email" name="email" type="email" value="%s" size="30"%s /></p>',
        esc_html__( 'Email', 'hovercraft' ), $required, esc_attr( $commenter['comment_author_email'] ), $aria_req );

    // set url field
    $fields['url'] = sprintf( '<p class="comment-form-url"><label for="comment-url">%s</label><input id="comment-url" name="url" type="url" value="%s" size="30" /></p>',
        esc_html__( 'Website', 'hovercraft' ), esc_attr( $commenter['comment_author_url'] ) );

    return $fields;
}

// Ref: ChatGPT
// Ref: https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
// Ref: https://stackoverflow.com/questions/20751219/undefined-variable-on-comments-wordpress
// Ref: https://stackoverflow.com/questions/55567423/error-please-fill-the-required-fields-name-email-in-wordpress-comment
// Ref: https://developer.wordpress.org/reference/functions/comment_form/
// Ref: https://stackoverflow.com/questions/3335929/edit-wordpress-comment-form-just-add-a-class-to-the-text-inputs
// Ref: https://stackoverflow.com/questions/11333810/how-to-customize-wordpress-comment-form
