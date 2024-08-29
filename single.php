<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="main">
	<div class="inner">
    	
		<?php
		$hovercraft_sidebar_appears = get_theme_mod( 'hovercraft_sidebar_appears', 'everywhere' );
		$hovercraft_primary_width = get_theme_mod( 'hovercraft_primary_width', 'narrow_centered' );

		if ( $hovercraft_sidebar_appears == 'everywhere' || $hovercraft_sidebar_appears == 'posts_only' ) { ?><div id="primary"><?php } 
		elseif ( $hovercraft_sidebar_appears == 'none' ) {
			if ( $hovercraft_primary_width == 'narrow_centered' ) { ?><div id="primary-center"><?php } 
			elseif ( $hovercraft_primary_width == 'wide' ) { ?><div id="primary-wide"><?php } 
		} ?>
		
		<div id="content-wrapper">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<?php $hovercraft_featured_image_position = get_theme_mod( 'hovercraft_featured_image_position', 'above_title' );
					if ( $hovercraft_featured_image_position == 'above_title' ) { ?>
			
					<?php get_template_part( 'template-parts/content/featured-image' ); ?>
			
					<div id="content-padded">

					<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				
					<?php get_template_part( 'template-parts/content/title' ); ?>	

					<?php get_template_part( 'template-parts/content/byline' ); ?>

					<?php $hovercraft_social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'bottom_of_post' );
					if ( $hovercraft_social_sharing == 'top_of_post' || $hovercraft_social_sharing == 'top_and_bottom_of_post' ) {
						get_template_part( 'template-parts/content/social-sharing' ); 
					} ?>

					<?php get_template_part( 'template-parts/content/byline-after' ); ?>
			
				<?php } else { ?>	
			
					<div id="content-padded">

					<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				
					<?php get_template_part( 'template-parts/content/title' ); ?>	

					<?php get_template_part( 'template-parts/content/byline' ); ?>

					<?php $hovercraft_social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'bottom_of_post' );
					if ( $hovercraft_social_sharing == 'top_of_post' || $hovercraft_social_sharing == 'top_and_bottom_of_post' ) {
						get_template_part( 'template-parts/content/social-sharing' ); 
					} ?>

					<?php get_template_part( 'template-parts/content/byline-after' ); ?>

					<?php get_template_part( 'template-parts/content/featured-image' ); ?>
						
				<?php } ?>

					<?php the_content(); ?>
		
					<?php endwhile; endif; ?><!-- the loop -->

					<?php get_template_part( 'template-parts/content/loop-after' ); ?>

					<?php $hovercraft_social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'bottom_of_post' );
					if ( $hovercraft_social_sharing == 'bottom_of_post' || $hovercraft_social_sharing == 'top_and_bottom_of_post' ) {
						get_template_part( 'template-parts/content/social-sharing' ); 
					} ?>

					<?php get_template_part( 'template-parts/content/related-posts' ); ?>
					
					<?php get_template_part( 'template-parts/content/biography' ); ?>

					<?php get_template_part( 'template-parts/content/tags' ); ?>
					
					<?php get_template_part( 'template-parts/content/link-pages' ); ?>
					
					<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
				</div><!-- content-padded -->
	
	<div class="clear"></div>
	</div><!-- content-wrapper -->

	<!-- comments template outside of post content div -->
	<?php get_template_part( 'template-parts/content/comments' ); ?>

	<div class="clear"></div>
	</div><!-- primary -->

		<?php $hovercraft_sidebar_appears = get_theme_mod( 'hovercraft_sidebar_appears', 'everywhere' );
		if ( $hovercraft_sidebar_appears == 'everywhere' || $hovercraft_sidebar_appears == 'posts_only' ) { 
			get_template_part( 'sidebar' ); 
		} ?>
		
    	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main -->
	
</div><!-- post -->

<?php get_template_part( 'footer' ); ?>
