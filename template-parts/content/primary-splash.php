<div id="primary">

<div class="breadcrumbs">
	<?php ah_breadcrumb(); ?>
</div><!-- breadcrumbs -->
	
	<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
		
	<div class="clear"></div>
	</div><!-- content -->

<div class="last-modified">
	<?php echo "<span>Last modified on "; the_modified_time('F jS, Y'); echo "</span>"; ?>
</div><!-- last-modified -->

<div class="clear"></div>
</div><!-- primary -->
