<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">
	
		<div id="content-wrapper">
				
			<div id="content-wide">
				<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
				<h1><?php $forum_page = get_page_by_path( 'forum' ); echo get_the_title( $forum_page ); ?></h1>
			                
				<?php $forum_page = get_page_by_path( 'forum' );
				$forum_page_content = apply_filters('the_content', $forum_page->post_content);
				echo $forum_page_content; ?>	
				
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

<!-- https://bbpress.org/forums/topic/page-php-as-template/ -->
<!-- https://bbpress.org/forums/topic/how-do-i-get-bbpress-pages-to-use-a-specific-page-template-in-wordpress/ -->
<!-- https://bbpress.org/forums/topic/force-bbpress-to-use-different-template-then-page-php/ -->
<!-- https://wordpress.stackexchange.com/questions/102841/how-to-get-page-id-of-a-page-using-page-slug -->
