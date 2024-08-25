<?php /* Template Name: Basic (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">
	
		<div id="content-wrapper">
		
			<?php get_template_part( 'template-parts/content/featured-image-large' ); ?>
		
			<div id="content-wide">
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>

				<!--Start the hide title-->
				<?php $hide_title_status = get_post_meta( get_the_ID(), '_mysite_meta_hide_title', true);
        		$post_id = get_the_ID();
        		if($hide_title_status == "off" || !metadata_exists( 'post', $post_id, '_mysite_meta_hide_title' ) ) : ?>
				<h1><?php the_title(); ?></h1>
				<?php endif; ?>
				<!--End the hide title-->
				
				<?php get_template_part( 'template-parts/content/loop' ); ?>
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
				<?php get_template_part( 'template-parts/content/comments' ); ?>
			<div class="clear"></div>
			</div><!-- content-padded -->
	
		</div><!-- content-wrapper -->

	<div class="clear"></div>
	</div><!-- primary-wide -->
	
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } //endif is_front_page ?>

<?php get_template_part( 'footer' ); ?>
