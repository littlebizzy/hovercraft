<div id="primary">
	
	<?php // if (is_singular('post')) { ?>
	<?php if (is_single()) { ?>
	<img width="800" height="450" src="<?php 
	// wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
	echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" />
	<h1><?php single_post_title(); ?></h1>
	<?php the_time(get_option('date_format')); ?><br><br>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	<?php } ?><!-- singular -->
	
	<!-- home page -->
<?php if (is_page('home')) { ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php endwhile; endif; ?>	
<?php } ?><!-- home page -->

<!-- page -->
<?php if (is_page() && !is_page('home')) { ?>
	<h1><?php the_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php endwhile; endif; ?>	
<?php } ?><!-- page -->
	
<!-- blog archive -->
<?php if (is_category('blog')) { ?>
	<h1><?php single_cat_title(); ?></h1>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <?php endwhile; endif; ?>
<?php } ?><!-- blog archive -->


<div class="clear"></div>
</div><!-- primary -->
