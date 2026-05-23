<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
	
	<?php
	$show_sidebar = hovercraft_should_show_sidebar();
	$hovercraft_primary_width = get_theme_mod( 'hovercraft_primary_width', 'narrow_centered' );
	?>

	<?php if ( $show_sidebar ) : ?>
		<div id="primary">
	<?php else : ?>
		<?php if ( $hovercraft_primary_width === 'narrow_centered' ) : ?>
			<div id="primary-center">
		<?php elseif ( $hovercraft_primary_width === 'wide' ) : ?>
			<div id="primary-wide">
		<?php endif; // end primary width ?>
	<?php endif; // end sidebar ?>
	
	<div id="content-wrapper">
		
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
					<?php $hovercraft_featured_image_position = get_theme_mod( 'hovercraft_featured_image_position', 'above_title' ); ?>
					<?php if ( $hovercraft_featured_image_position === 'above_title' ) : ?>
		
						<?php get_template_part( 'template-parts/content/featured-image' ); ?>
		
						<div id="content-padded">

						<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
				
						<?php get_template_part( 'template-parts/content/title' ); ?>	

						<?php get_template_part( 'template-parts/content/byline' ); ?>

						<?php
						$hovercraft_social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'bottom_of_post' );
						?>
						<?php if ( $hovercraft_social_sharing === 'top_of_post' || $hovercraft_social_sharing === 'top_and_bottom_of_post' ) : ?>
							<?php get_template_part( 'template-parts/content/social-sharing' ); ?>
						<?php endif; // end social sharing ?>

						<?php get_template_part( 'template-parts/content/byline-after' ); ?>
		
					<?php else : ?>	
		
						<div id="content-padded">

						<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
				
						<?php get_template_part( 'template-parts/content/title' ); ?>	

						<?php get_template_part( 'template-parts/content/byline' ); ?>

						<?php
						$hovercraft_social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'bottom_of_post' );
						?>
						<?php if ( $hovercraft_social_sharing === 'top_of_post' || $hovercraft_social_sharing === 'top_and_bottom_of_post' ) : ?>
							<?php get_template_part( 'template-parts/content/social-sharing' ); ?>
						<?php endif; // end social sharing ?>

						<?php get_template_part( 'template-parts/content/byline-after' ); ?>

						<?php get_template_part( 'template-parts/content/featured-image' ); ?>
							
					<?php endif; // end featured image position ?>

						<div class="entry-content"><?php the_content(); ?></div>

						<?php get_template_part( 'template-parts/content/loop-after' ); ?>

						<?php
						$hovercraft_social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'bottom_of_post' );
						?>
						<?php if ( $hovercraft_social_sharing === 'bottom_of_post' || $hovercraft_social_sharing === 'top_and_bottom_of_post' ) : ?>
							<?php get_template_part( 'template-parts/content/social-sharing' ); ?>
						<?php endif; // end social sharing ?>

						<?php get_template_part( 'template-parts/content/related-posts' ); ?>
						
						<?php get_template_part( 'template-parts/content/biography' ); ?>

						<?php get_template_part( 'template-parts/misc/tags' ); ?>
						
						<?php get_template_part( 'template-parts/content/link-pages' ); ?>
						
						<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
					</div><!-- content-padded -->

				</article><!-- post -->
	
			<?php endwhile; // end single post ?>
		<?php endif; ?><!-- end the loop -->

	<div class="clear"></div>
	</div><!-- content-wrapper -->

	<!-- comments template outside of post content div -->
	<?php get_template_part( 'template-parts/comments/comments' ); ?>

	<div class="clear"></div>
	</div><!-- primary -->

	<?php if ( $show_sidebar ) : ?>
		<?php get_template_part( 'sidebar' ); ?>
	<?php endif; // end sidebar ?>
	
	<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->	

<?php get_template_part( 'footer' ); ?>
