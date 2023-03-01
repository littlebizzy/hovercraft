<?php /* Template Name: Basic (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php get_template_part( 'template-parts/content/premain' ); ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">

		<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
		<div id="content">
			
			<h1><?php the_title(); ?></h1>
			
			<?php $url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
			if ( !empty( $url_featured_image ) ) { ?>
			<img class="featured-image" src="<?php echo $url_featured_image; ?>" />
			<?php } ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?><!-- the loop -->
	
		<div class="clear"></div>
		<?php hovercraft_pagination_nav(); ?>	
	
			<div class="clear"></div>
		</div><!-- content -->

		<?php get_template_part( 'template-parts/content/last-modified' ); ?>
	
		<?php comments_template(); ?> 

		<div class="clear"></div>
	</div><!-- primary-wide -->
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } ?>

<?php get_template_part( 'footer' ); ?>
