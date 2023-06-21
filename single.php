<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="main">
	<div class="inner">
    	
		<?php $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
		if ( $hovercraft_sidebar_status_checked == true ) { ?><div id="primary"><?php } else { ?><div id="primary-center"><?php } ?>
		
		<div id="content">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'template-parts/content/featured-image' ); ?>
			
				<div class="content-padded">

					<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				
					<h1><?php the_title(); ?></h1>

					<?php get_template_part( 'template-parts/content/byline' ); ?>					
		
					<?php the_content(); ?>
		
					<?php endwhile; endif; ?><!-- the loop -->
					
					<?php get_template_part( 'template-parts/content/biography' ); ?>
			
					<?php get_template_part( 'template-parts/content/tags' ); ?>
	
					<?php get_template_part( 'template-parts/content/last-modified' ); ?>
				
					<?php get_template_part( 'template-parts/content/link-pages' ); ?>
					
					<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
				</div><!-- content-padded -->
	
	<div class="clear"></div>
	</div><!-- content -->
	
	<?php comments_template(); ?> 

		<div class="clear"></div>
	</div><!-- primary -->
		
    	<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
		} ?>
		
    	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main -->
	
</div><!-- post -->

<?php get_template_part( 'footer' ); ?>
