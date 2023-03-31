<div class="author-byline">
	<span class="post-author"><?php _e( 'Author: ', 'hovercraft' ); echo get_the_author_meta('display_name', $author_id); ?></span><br>
	<span class="post-date"><?php if ( 'post' == get_post_type() ) { the_time(get_option('date_format')); } ?></span>	
</div><!-- author-byline -->
