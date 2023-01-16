<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">

  <?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { ?><div id="primary"><?php } else { ?><div id="primary-wide"><?php } ?>

	<?php if ( get_theme_mod( 'hovercraft_breadcrumbs' ) == 1 ) { ?>
		<div class="breadcrumbs">
			<?php ah_breadcrumb(); ?>
		</div><!-- breadcrumbs -->
	<?php } ?><!-- if hovercraft_breadcrumbs -->
	
	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
		
		<?php endwhile; endif; ?><!-- the loop -->
	
	<div class="clear"></div>
	<?php hovercraft_pagination_nav(); ?>	
	
	<div class="clear"></div>
	</div><!-- content -->

	<div class="last-modified">
		<span> <?php _e('Last modified on ', 'hovercraft'); echo the_modified_time('F j, Y'); ?> </span>
	</div><!-- last-modified -->

	<div class="clear"></div>
  </div><!-- primary -->
  
    <?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
	  } ?>
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
