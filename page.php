<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php if ( hovercraft_should_show_main_content() ) : ?>
	<div id="main">
		<div class="inner">

			<?php $show_sidebar = (bool) get_theme_mod( 'hovercraft_sidebar_status' ); ?>

			<?php if ( $show_sidebar ) : ?>
				<div id="primary">
			<?php else : ?>
				<div id="primary-wide">
			<?php endif; ?>

						<div id="content-wrapper">

							<?php get_template_part( 'template-parts/content/featured-image' ); ?>

							<div id="content-padded">
								<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
								<?php get_template_part( 'template-parts/content/title' ); ?>
								<?php get_template_part( 'template-parts/content/loop' ); ?>
								<?php get_template_part( 'template-parts/content/pagination' ); ?>
								<?php get_template_part( 'template-parts/content/comments' ); ?>
								<div class="clear"></div>
							</div><!-- content-padded -->

						</div><!-- content-wrapper -->

						<div class="clear"></div>
					</div><!-- primary / primary-wide -->

			<?php if ( $show_sidebar ) : ?>
				<?php get_template_part( 'sidebar' ); ?>
			<?php endif; ?>

			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- main -->
<?php endif; ?>

<?php get_template_part( 'footer' ); ?>
