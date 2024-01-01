<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">

	<?php 
	$hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
	$hovercraft_primary_width = get_theme_mod( 'hovercraft_primary_width', 'wide' );
	
	if ( $hovercraft_sidebar_status_checked == true ) { ?><div id="primary"><?php } 
	elseif ( $hovercraft_sidebar_status_checked == false ) {
		if ( $hovercraft_primary_width == 'narrow_centered' ) { ?>
			<div id="primary-center">
		<?php } 
		elseif ( $hovercraft_primary_width == 'wide' ) { ?>
			<div id="primary-wide">
		<?php } 
	} ?>

		<div id="content-wrapper">
									
			<div id="content-padded">
								
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>

				<?php
				
				// hovercraft blog category
				$blog_category = get_theme_mod( 'hovercraft_blog_category', 'none' );
				
				if ( is_home() ) {
				
        		// the query
				// https://wordpress.stackexchange.com/questions/145125/display-content-from-a-specific-category
				// https://wordpress.stackexchange.com/questions/14768/determine-if-page-is-the-posts-page
				if ( $blog_category != 'none' ) {
        			$the_query = new WP_Query(array(
            			'category_name' => $blog_category,
            			'post_status' => 'publish'        
						)
					);	
				} else {
					$the_query = new WP_Query(array(
            			'post_status' => 'publish'        
						)
					);					
				} // end else if hovercraft blog category not defined
				
				// custom query syntax for is_home

					if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
						
						<div class="post-tease-archive">
					
				<?php 
				$hovercraft_primary_width = get_theme_mod( 'hovercraft_primary_width', 'wide' );
				if ( $hovercraft_primary_width == 'wide' ) { get_template_part( 'template-parts/content/featured-image-archive-large' ); } 
				else { get_template_part( 'template-parts/content/featured-image-archive' ); } ?>
				
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

				<?php get_template_part( 'template-parts/content/byline-archive' ); ?>
		
				<div class="post-excerpt-archive"><?php the_excerpt(); ?></div>
				</div><!-- post-tease-archive -->
						
					<?php } // end while
					} // end if
					
				} else { ?>
				
				<h1><?php the_archive_title(); ?></h1>
				
				<div class="category-description"><?php echo category_description(); ?></div> 
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		
				<div class="post-tease-archive">
					
				<?php 
				$hovercraft_primary_width = get_theme_mod( 'hovercraft_primary_width', 'wide' );
				if ( $hovercraft_primary_width == 'wide' ) { get_template_part( 'template-parts/content/featured-image-archive-large' ); } 
				else { get_template_part( 'template-parts/content/featured-image-archive' ); } ?>
				
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

				<?php get_template_part( 'template-parts/content/byline-archive' ); ?>
		
				<div class="post-excerpt-archive"><?php the_excerpt(); ?></div>
				</div><!-- post-tease-archive -->
		
				<?php endwhile; endif; ?><!-- the loop -->
				
				<?php } ?>
					
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
						
			<div class="clear"></div>
			</div><!-- content-padded -->
		</div><!-- content-wrapper -->

	<div class="clear"></div>
  	</div><!-- primary -->
  
    <?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
	  } ?>
    
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
