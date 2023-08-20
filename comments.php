<?php

/* https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */

if ( post_password_required() ) {
	return;
}
?>

	<?php if ( have_comments() ) : ?>
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
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'hovercraft' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'hovercraft' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'hovercraft' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'hovercraft' ); ?></p>
		<?php endif; ?>

	</div><!-- comments -->
	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>
