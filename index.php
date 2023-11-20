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

		<div id="content">
									
			<div class="content-padded">
								
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>

				<?php
				// blog category
				$blog_category = get_theme_mod( 'hovercraft_blog_category', 'none' );
        		// the query
				// https://wordpress.stackexchange.com/questions/145125/display-content-from-a-specific-category
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
				}
        		?>
				
				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
		
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
					
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
						
			<div class="clear"></div>
			</div><!-- content-padded -->
		</div><!-- content -->

	<div class="clear"></div>
  	</div><!-- primary -->
  
    <?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
	  } ?>
    
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
