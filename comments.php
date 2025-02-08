<?php

// if the current post is protected by a password and the visitor has not yet entered the password we will return early without loading the comments.
if ( post_password_required() ) {
    return;
}

if ( have_comments() ) : ?>
    <div id="comments" class="comments-area">
        <h2 class="comments-title">
            <?php
            printf(
                _nx(
                    'One thought on "%2$s"',
                    '%1$s thoughts on "%2$s"',
                    get_comments_number(),
                    'comments title',
                    'hovercraft'
                ),
                number_format_i18n( get_comments_number() ),
                '<span>' . get_the_title() . '</span>'
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ) );
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'hovercraft' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'hovercraft' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'hovercraft' ) ); ?></div>
            </nav>
        <?php endif; ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'hovercraft' ); ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php

$commenter      = wp_get_current_commenter();
$req            = get_option( 'require_name_email' );
$aria_req       = $req ? " aria-required='true'" : '';
$required_attr  = '<span class="required">*</span>';

$fields = array(
    'author' => '<p class="comment-form-author">
                    <label for="comment-author">' . __( 'Name' ) . '</label> ' . ( $req ? $required_attr : '' ) . 
                    '<input id="comment-author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
                 </p>',

    'email'  => '<p class="comment-form-email">
                    <label for="comment-email">' . __( 'Email' ) . '</label> ' . ( $req ? $required_attr : '' ) . 
                    '<input id="comment-email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
                 </p>',

    'url'    => '<p class="comment-form-url">
                    <label for="comment-url">' . __( 'Website' ) . '</label> 
                    <input id="comment-url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
                 </p>',
);

comment_form( array( 'fields' => $fields ) );

// Ref: https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
// Ref: https://stackoverflow.com/questions/20751219/undefined-variable-on-comments-wordpress
// Ref: https://stackoverflow.com/questions/55567423/error-please-fill-the-required-fields-name-email-in-wordpress-comment
// Ref: https://developer.wordpress.org/reference/functions/comment_form/
// Ref: https://stackoverflow.com/questions/3335929/edit-wordpress-comment-form-just-add-a-class-to-the-text-inputs
// Ref: https://stackoverflow.com/questions/11333810/how-to-customize-wordpress-comment-form
