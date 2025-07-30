<div id="hero-mini">

<div id="header-mini-hero">

	<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-left">
				<?php add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_preheader_left' );
				remove_filter( 'widget_title', '__return_false' ); ?>
			</div>
			<div class="preheader-right">
				<?php add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_preheader_right' );
				remove_filter( 'widget_title', '__return_false' ); ?>
			</div>
			<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-center">
				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) {
					add_filter( 'widget_title', '__return_false' );
					dynamic_sidebar( 'hovercraft_preheader_left' );
					remove_filter( 'widget_title', '__return_false' );
				} elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) {
					add_filter( 'widget_title', '__return_false' );
					dynamic_sidebar( 'hovercraft_preheader_right' );
					remove_filter( 'widget_title', '__return_false' );
				} ?>
			</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php } ?>

	<?php get_template_part( 'template-parts/header/navigation' ); ?>
</div>

<div class="hero-main-mini">
<div class="inner">
	<div class="title-wrapper">

		<?php
		$hide_title_status = get_post_meta( get_the_ID(), '_mysite_meta_hide_title', true );
		$post_id = get_the_ID();
		if ( $hide_title_status === 'off' || ! metadata_exists( 'post', $post_id, '_mysite_meta_hide_title' ) ) :
		?>
		<h1 class="mini-hero-title <?php
			$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
			if ( $h1_divider_display === 'everywhere_possible' ) {
				echo 'divide';
			}
		?>"><?php
			if ( is_singular() ) {
				single_post_title();
			} elseif ( is_category() ) {
				single_cat_title();
			}
		?></h1>
		<?php endif; ?>

		<?php
		$portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' );
		if ( is_category( $portal_category ) ) {
			$category_id = get_queried_object_id();
		?>
		<br>
		<form role="search" method="get" class="searchform" action="<?php echo esc_url( get_category_link( $category_id ) ); ?>">
			<div class="input-container">
				<input type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php
					$cattitle = single_cat_title( '', false );
					echo 'Search ' . strtolower( $cattitle ) . '...';
				?>" />
				<button type="submit" class="search-submit" name="submit"><?php
					$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
					if ( $hovercraft_layout_icons === 'material_icons_classic' ) {
						echo '<i class="material-icons search">search</i>';
					} elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) {
						echo '<i class="fas fa-search"></i>';
					}
				?></button>
			</div>
		</form>
		<?php } ?>

		<?php if ( is_front_page() ) : ?>
			<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) || has_excerpt() ) : ?>
				<div class="hero-snippet">
					<?php
					if ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) {
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_hero_snippet' );
						remove_filter( 'widget_title', '__return_false' );
					} else {
						the_excerpt();
					}
					?>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( is_front_page() ) : ?>
		<div class="cta-hero-wrapper">
			<?php
			if ( has_nav_menu( 'cta-hero-primary' ) ) {
				wp_nav_menu( array(
					'theme_location'  => 'cta-hero-primary',
					'menu_class'      => 'cta',
					'container_class' => 'cta-hero-primary',
				) );
			}
			if ( has_nav_menu( 'cta-hero-secondary' ) ) {
				wp_nav_menu( array(
					'theme_location'  => 'cta-hero-secondary',
					'menu_class'      => 'cta',
					'container_class' => 'cta-hero-secondary',
				) );
			}
			?>
		</div>
		<?php endif; ?>

	</div><!-- title-wrapper -->

	<?php if ( has_post_thumbnail() && get_the_post_thumbnail_caption() ) : ?>
		<div class="mini-hero-caption"><?php echo esc_html( get_the_post_thumbnail_caption() ); ?></div>
	<?php endif; ?>

	<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-main-mini -->

</div><!-- hero-mini -->
