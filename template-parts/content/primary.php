<div id="primary">

<div class="breadcrumbs">
	<?php ah_breadcrumb(); ?>
</div><!-- breadcrumbs -->
	
	<div id="content">
	
	<!-- posts -->	
	<?php if ( is_single() && 'post' == get_post_type() ) { ?>
	<?php 
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
	if (!empty( $url_featured_image ) ) { ?>
	<img width="800" height="450" src="<?php echo $url_featured_image; ?>" />
	<?php } ?>
	<h1><?php single_post_title(); ?></h1>
	<?php the_time(get_option('date_format')); ?><br><br>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	<?php } ?><!-- posts -->
		
	<!-- products -->	
	<?php if ( is_single() && 'product' == get_post_type() ) { ?>
	<h1><?php single_post_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	<?php } ?><!-- products -->
	
	<!-- home page -->
	<?php if (is_page('home')) { ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php endwhile; endif; ?>	
	<?php } ?><!-- home page -->

	<!-- page -->
	<?php if ( is_page() ) { ?>
	<?php if ( is_page_template( 'page-templates/template-basic.php' ) ) { ?>
	<h1><?php the_title(); ?></h1>
	<?php } ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php endwhile; endif; ?>	
	<?php } ?><!-- page -->
	
	<!-- archive -->
	<?php if (is_archive()) { ?>
	<h1><?php single_cat_title(); ?></h1>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <?php endwhile; endif; ?>
	<?php } ?><!-- archive -->
	
	<div class="clear"></div>
	</div><!-- content -->


	<div class="last-modified">
		<?php echo "<span>Last modified on "; the_modified_time('F jS, Y'); echo "</span>"; ?>
	</div><!-- last-modified -->

	<div class="clear"></div>
</div><!-- primary -->
