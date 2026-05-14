<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="hero-mini">

<div id="header-mini-hero">

	<?php get_template_part( 'template-parts/header/preheader' ); ?>
	<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</div><!-- header-mini-hero -->

<div class="hero-main-mini">
<div class="inner">
	<div class="title-wrapper">

		<?php if ( ! hovercraft_is_title_hidden() ) : ?>
		<h1 class="mini-hero-title <?php
			$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
			if ( $h1_divider_display === 'everywhere_possible' ) {
				echo esc_attr( 'divide' );
			}
		?>"><?php
			if ( is_singular() ) {
				echo esc_html( single_post_title( '', false ) );
			} elseif ( is_category() ) {
				echo esc_html( single_cat_title( '', false ) );
			}
		?></h1>
		<?php endif; // end title display ?>

		<?php
		$portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' );
		if ( is_category( $portal_category ) ) :
			$category_id = get_queried_object_id();
		?>
		<br>
		<form role="search" method="get" class="searchform" action="<?php echo esc_url( get_category_link( $category_id ) ); ?>">
			<div class="input-container">
				<input type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php
					$cattitle = single_cat_title( '', false );
					echo esc_attr( 'Search ' . strtolower( $cattitle ) . '...' );
				?>" />
				<button type="submit" class="search-submit" name="submit"><?php
					$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
					if ( $hovercraft_layout_icons === 'material_icons_classic' ) {
						echo '<i class="material-icons search">search</i>';
					} elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) {
						echo '<i class="fas fa-search"></i>';
					}
				?></button>
				</div><!-- input-container -->
		</form>
		<?php endif; // end category ?>

		<?php if ( is_front_page() ) : ?>
			<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) || has_excerpt() ) : ?>
				<div class="hero-snippet">
					<?php get_template_part( 'template-parts/header/hero-snippet' ); ?>
					</div><!-- hero-snippet -->
			<?php endif; // end hovercraft-hero-snippet sidebar ?>
		<?php endif; // end is_front_page ?>

		<?php get_template_part( 'template-parts/header/hero-cta' ); ?>

	</div><!-- title-wrapper -->

	<?php if ( has_post_thumbnail() && get_the_post_thumbnail_caption() ) : ?>
		<div class="mini-hero-caption"><?php echo esc_html( get_the_post_thumbnail_caption() ); ?></div>
	<?php endif; // end featured image caption ?>

	<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-main-mini -->

</div><!-- hero-mini -->
