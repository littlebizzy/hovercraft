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

		<h3 class="comments-title">
			<?php
			$hovercraft_comment_count = get_comments_number();

			if ( 1 === (int) $hovercraft_comment_count ) {
				printf(
					esc_html__( 'One comment on %s', 'hovercraft' ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					esc_html( _nx( '%1$s comment on %2$s', '%1$s comments on %2$s', $hovercraft_comment_count, 'comments title', 'hovercraft' ) ),
					number_format_i18n( $hovercraft_comment_count ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			}
			?>
		</h3>

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

	<?php
	// display the comment form
	comment_form();
	?>

</div><!-- comments -->
