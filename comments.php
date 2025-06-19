<?php
// exit early if post is password-protected
if ( post_password_required() ) return;
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
            // display comment count with post title
            comments_number(
                esc_html__( 'No comments yet on', 'hovercraft' ),
                esc_html__( 'One comment on', 'hovercraft' ),
                esc_html__( '% comments on', 'hovercraft' )
            );
            echo ' <span>' . esc_html( get_the_title() ) . '</span>';
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            // output comments using overridable args
            wp_list_comments( apply_filters( 'hovercraft_comments_args', array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74
            ) ) );
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav class="comment-navigation" aria-label="<?php esc_attr_e( 'Comment Navigation', 'hovercraft' ); ?>">
                <p class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'hovercraft' ); ?></p>
                <div class="comment-nav-prev">
                    <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'hovercraft' ) ); ?>
                </div>
                <div class="comment-nav-next">
                    <?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'hovercraft' ) ); ?>
                </div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hovercraft' ); ?></p>
    <?php endif; ?>

    <?php
    // display the comment form
    comment_form();
    ?>

<?php
// Ref: ChatGPT
// Ref: https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
// Ref: https://stackoverflow.com/questions/20751219/undefined-variable-on-comments-wordpress
// Ref: https://stackoverflow.com/questions/55567423/error-please-fill-the-required-fields-name-email-in-wordpress-comment
// Ref: https://developer.wordpress.org/reference/functions/comment_form/
// Ref: https://stackoverflow.com/questions/3335929/edit-wordpress-comment-form-just-add-a-class-to-the-text-inputs
// Ref: https://stackoverflow.com/questions/11333810/how-to-customize-wordpress-comment-form
?>
