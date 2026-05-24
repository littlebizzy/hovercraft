<?php

// get mini hero state
$hovercraft_is_front_page = is_front_page();
$hovercraft_hero_snippet_active = is_active_sidebar( 'hovercraft_hero_snippet' );
$hovercraft_has_excerpt = has_excerpt();
$hovercraft_title_hidden = hovercraft_is_title_hidden();

// get title display state
$hovercraft_show_title = ! $hovercraft_title_hidden;
$hovercraft_show_hero_snippet = $hovercraft_is_front_page && ( $hovercraft_hero_snippet_active || $hovercraft_has_excerpt );

// get title text
$hovercraft_mini_hero_title = '';

if ( is_singular() ) {
	$hovercraft_mini_hero_title = single_post_title( '', false );
} elseif ( is_category() ) {
	$hovercraft_mini_hero_title = single_cat_title( '', false );
}

// get title class
$hovercraft_h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
$hovercraft_mini_hero_title_class = 'mini-hero-title';

if ( 'everywhere_possible' === $hovercraft_h1_divider_display ) {
	$hovercraft_mini_hero_title_class .= ' divide';
}

// get portal search state
$hovercraft_portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' );
$hovercraft_show_portal_search = is_category( $hovercraft_portal_category );

if ( $hovercraft_show_portal_search ) {
	$hovercraft_category_id = get_queried_object_id();
	$hovercraft_category_title = single_cat_title( '', false );
	$hovercraft_search_id = wp_unique_id( 'search-' );
	$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
}

?>
<div id="hero-mini">

	<?php // render mini hero header ?>
	<div id="header-mini-hero">
		<?php get_template_part( 'template-parts/header/header-preheader' ); ?>
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</div><!-- header-mini-hero -->

	<?php // render mini hero main ?>
	<div class="hero-main-mini">
		<div class="inner">
			<div class="title-wrapper">

				<?php // render title ?>
				<?php if ( $hovercraft_show_title ) : ?>
					<h1 class="<?php echo esc_attr( $hovercraft_mini_hero_title_class ); ?>"><?php echo esc_html( $hovercraft_mini_hero_title ); ?></h1>
				<?php endif; // end title ?>

				<?php // render portal search ?>
				<?php if ( $hovercraft_show_portal_search ) : ?>
					<br>
					<form role="search" method="get" class="searchform" action="<?php echo esc_url( get_category_link( $hovercraft_category_id ) ); ?>">
						<label class="screen-reader-text" for="<?php echo esc_attr( $hovercraft_search_id ); ?>"><?php echo esc_html( sprintf( __( 'Search %s', 'hovercraft' ), strtolower( $hovercraft_category_title ) ) ); ?></label>
						<div class="input-container">
							<input id="<?php echo esc_attr( $hovercraft_search_id ); ?>" type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php echo esc_attr( 'Search ' . strtolower( $hovercraft_category_title ) . '...' ); ?>" />
							<button type="submit" class="search-submit" name="submit" aria-label="<?php esc_attr_e( 'Submit search', 'hovercraft' ); ?>">
								<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
									<i class="material-icons search" aria-hidden="true">search</i>
								<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
									<i class="fa-solid fa-search" aria-hidden="true"></i>
								<?php endif; // end layout icons ?>
							</button>
						</div><!-- input-container -->
					</form><!-- searchform -->
				<?php endif; // end portal search ?>

				<?php // render hero snippet ?>
				<?php if ( $hovercraft_show_hero_snippet ) : ?>
					<div class="hero-snippet">
						<?php get_template_part( 'template-parts/header/hero-snippet' ); ?>
					</div><!-- hero-snippet -->
				<?php endif; // end hero snippet ?>

				<?php // render hero cta ?>
				<?php get_template_part( 'template-parts/header/hero-cta' ); ?>
			</div><!-- title-wrapper -->

			<?php // render hero caption ?>
			<?php get_template_part( 'template-parts/hero/hero-caption' ); ?>

			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- hero-main-mini -->

</div><!-- hero-mini -->
