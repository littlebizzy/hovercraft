<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">
	
		<div id="content-wrapper">
				
			<div id="content-wide">
				<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				<h1><?php the_title(); ?></h1>
				<?php get_template_part( 'template-parts/content/loop' ); ?>
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
            <div class="clear"></div>
			</div><!-- content-padded -->
	
		</div><!-- content-wrapper -->

	<div class="clear"></div>
	</div><!-- primary-wide -->
	
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>

<!-- https://bbpress.org/forums/topic/how-do-i-get-bbpress-pages-to-use-a-specific-page-template-in-wordpress/ -->
<!-- https://bbpress.org/forums/topic/force-bbpress-to-use-different-template-then-page-php/ -->
