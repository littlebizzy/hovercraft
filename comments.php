<?php

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

		<h2 class="comments-title">
			<?php comments_number(); ?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( apply_filters( 'hovercraft_comments_args', array(
				'style' => 'ol',
			) ) );
			?>
		</ol><!-- comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // end have_comments ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments">
			<?php esc_html_e( 'Comments are closed.', 'hovercraft' ); ?>
		</p>
	<?php endif; // end comments_open ?>

	<?php comment_form(); ?>

</div><!-- comments -->
