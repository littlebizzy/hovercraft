<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">

	<?php 
	$hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
	$hovercraft_primary_width = get_theme_mod( 'hovercraft_primary_width', 'narrow_centered' );
	
	if ( ( $hovercraft_sidebar_status_checked == true ) || ( $hovercraft_sidebar_status_checked != true && $hovercraft_primary_width = 'narrow_centered' ) ) { ?><div id="primary"><?php } elseif ( ( $hovercraft_sidebar_status_checked == false ) && ( $hovercraft_primary_width = 'wide' ) ) { ?><div id="primary-wide"><?php } ?>
	
		<div id="content">
									
			<div class="content-padded">
				
				<?php $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
				echo $hovercraft_sidebar_status_checked; ?>
				
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="post-tease-archive">
				<?php get_template_part( 'template-parts/content/featured-image-archive' ); ?>
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
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
