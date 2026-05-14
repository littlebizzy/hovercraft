<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if post is password-protected
if ( post_password_required() ) {
    return;
}

// exit if comments are closed and none exist
if ( ! comments_open() && ! get_comments_number() ) {
    return;
}
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
            echo ' ' . esc_html( get_the_title() );
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            // output comments using overridable args
            wp_list_comments( apply_filters( 'hovercraft_comments_args', array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ) ) );
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav class="comment-navigation" aria-label="<?php esc_attr_e( 'Comment Navigation', 'hovercraft' ); ?>">
                <p class="screen-reader-text">
                    <?php esc_html_e( 'Comment Navigation', 'hovercraft' ); ?>
                </p>
                <div class="comment-nav-prev">
                    <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'hovercraft' ) ); ?>
                </div>
                <div class="comment-nav-next">
                    <?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'hovercraft' ) ); ?>
                </div>
            </nav>
        <?php endif; // end comment pagination ?>

    <?php endif; // end have_comments ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments">
            <?php esc_html_e( 'Comments are closed.', 'hovercraft' ); ?>
        </p>
    <?php endif; // end comments_open ?>

    <?php
    // display the comment form
    comment_form();
    ?>

</div>

<?php
?>
