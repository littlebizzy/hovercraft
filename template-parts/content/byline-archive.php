<?php

global $post;

// skip if single product page
if ( is_singular( 'product' ) ) {
	return;
}

// get author id safely
$author_id = isset( $post ) && is_object( $post ) ? $post->post_author : 0;
?>

<div class="post-byline-archive">
	<span class="post-author">
		<span class="author-name"><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></span>
	</span>

	<?php $hovercraft_byline_date = get_theme_mod( 'hovercraft_byline_date', 'published_date_only' ); ?>

	<?php if ( $hovercraft_byline_date === 'published_date_only' ) : ?>
		<span class="byline-separator">|</span>
		<time class="date-published" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time>
	<?php elseif ( $hovercraft_byline_date === 'updated_date_only' ) : ?>
		<span class="byline-separator">|</span>
		<time class="date-updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_W3C ) ); ?>"><?php echo esc_html__( 'Updated', 'hovercraft' ) . ' ' . esc_html( get_the_modified_date( 'M j, Y' ) ); ?></time>
	<?php elseif ( $hovercraft_byline_date === 'updated_and_published_dates' ) : ?>
		<span class="byline-separator">|</span>
		<time class="date-published" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time>
		<span class="byline-date-separator" aria-hidden="true">&middot;</span>
		<time class="date-updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_W3C ) ); ?>"><?php echo esc_html__( 'Updated', 'hovercraft' ) . ' ' . esc_html( get_the_modified_date( 'M j, Y' ) ); ?></time>
	<?php endif; // end byline date ?>
</div><!-- post-byline-archive -->

<?php
