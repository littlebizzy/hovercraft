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
			$cattitle = single_cat_title( '', false );
			$hovercraft_search_id = wp_unique_id( 'search-' );
			$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
		?>
		<br>
		<form role="search" method="get" class="searchform" action="<?php echo esc_url( get_category_link( $category_id ) ); ?>">
			<label class="screen-reader-text" for="<?php echo esc_attr( $hovercraft_search_id ); ?>"><?php echo esc_html( sprintf( __( 'Search %s', 'hovercraft' ), strtolower( $cattitle ) ) ); ?></label>
			<div class="input-container">
				<input id="<?php echo esc_attr( $hovercraft_search_id ); ?>" type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php echo esc_attr( 'Search ' . strtolower( $cattitle ) . '...' ); ?>" />
				<button type="submit" class="search-submit" name="submit" aria-label="<?php esc_attr_e( 'Submit search', 'hovercraft' ); ?>">
					<?php if ( $hovercraft_layout_icons === 'material_icons_classic' ) : ?>
						<i class="material-icons search" aria-hidden="true">search</i>
					<?php elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) : ?>
						<i class="fas fa-search" aria-hidden="true"></i>
					<?php endif; // end layout icons ?>
				</button>
				</div><!-- input-container -->
		</form><!-- searchform -->
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

	<?php get_template_part( 'template-parts/header/hero-caption' ); ?>

	<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-main-mini -->

</div><!-- hero-mini -->
