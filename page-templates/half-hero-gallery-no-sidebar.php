<?php /* Template Name: Half Hero Gallery (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-half-hero' ); ?>

	<?php if ( hovercraft_should_show_posthero( 'half' ) ) : ?>
		<?php get_template_part( 'template-parts/content/posthero' ); ?>
	<?php endif; ?>

<?php if ( hovercraft_should_show_main_content() ) { ?>

<div id="main">
<div class="inner">
    
    <div id="primary-wide">

	<div id="content-wrapper">

	<div id="content-wide">
					<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
					<?php get_template_part( 'template-parts/content/title' ); ?>
					<?php get_template_part( 'template-parts/content/loop' ); ?>
					<?php get_template_part( 'template-parts/content/gallery' ); ?>
					<?php get_template_part( 'template-parts/content/pagination' ); ?>
					<?php get_template_part( 'template-parts/content/comments' ); ?>
				<div class="clear"></div>
				</div><!-- content-padded -->
		
	</div><!-- content-wrapper -->   
	
	    <div class="clear"></div>
    </div><!-- primary -->
        
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php } // if is_front_page ?>

<?php get_template_part( 'footer' ); ?>
