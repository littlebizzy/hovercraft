<?php

get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
    
	<div id="primary-wide">
	
		<div id="content-wrapper">
				
			<div id="content-wide">
				<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
				<?php $forum_page = get_page_by_path( 'forum' ); ?>
				<h1 class="archive-title"><?php echo esc_html( $forum_page instanceof WP_Post ? get_the_title( $forum_page ) : __( 'Forum', 'hovercraft' ) ); ?></h1>
			                
				<?php if ( $forum_page instanceof WP_Post ) : ?>
					<?php
					$forum_page_content = apply_filters( 'the_content', $forum_page->post_content );
					?>
					<div class="entry-content"><?php echo $forum_page_content; ?></div>
				<?php endif; // end forum-page ?>
				
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

