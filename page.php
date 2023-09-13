<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>
<?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
	<?php $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
	if ( $hovercraft_sidebar_status_checked == true ) { ?><div id="primary"><?php } else { ?><div id="primary-wide"><?php } ?>
	
		<div id="content">
						
			<?php get_template_part( 'template-parts/content/featured-image' ); ?>
			
			<div class="content-padded">
				
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				
				<h1><?php the_title(); ?></h1>
		
				<?php get_template_part( 'template-parts/content/loop' ); ?>
					
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
	
				<?php get_template_part( 'template-parts/content/comments' ); ?>
					
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

<?php } //endif is_front_page ?>

<?php get_template_part( 'footer' ); ?>
