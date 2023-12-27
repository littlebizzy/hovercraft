<div id="hero-mini">

<div id="header-mini-hero">
	
	<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-left">
				<?php add_filter('widget_title', '__return_false');
				dynamic_sidebar( 'hovercraft_preheader_left' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
				remove_filter('widget_title', '__return_false'); ?>
			</div><!-- preheader-left -->
			<div class="preheader-right">
				<?php add_filter('widget_title', '__return_false');
				dynamic_sidebar( 'hovercraft_preheader_right' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
				remove_filter('widget_title', '__return_false'); ?>
			</div><!-- preheader-right -->
			<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-center">
				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) {
					add_filter('widget_title', '__return_false');
					dynamic_sidebar( 'hovercraft_preheader_left' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
					remove_filter('widget_title', '__return_false');
				} elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) {
					add_filter('widget_title', '__return_false');
					dynamic_sidebar( 'hovercraft_preheader_right' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
					remove_filter('widget_title', '__return_false');
				} ?>
			</div><!-- preheader-center -->
			<?php } ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- preheader -->
	<?php } ?><!-- if preheader widgets active -->
	
<?php get_template_part('template-parts/header/navigation'); ?>
</div>
	
<div class="hero-main-mini">
<div class="inner">
		<div class="title-wrapper">

		<!--Start the hide title-->
    	<?php 
        $hide_title_status = get_post_meta( get_the_ID(), '_mysite_meta_hide_title', true);
        $post_id = get_the_ID();
        if($hide_title_status == "off" || !metadata_exists( 'post', $post_id, '_mysite_meta_hide_title' ) ) :
    	?>
		<h1 class="mini-hero-title"><?php if ( is_singular() ) { single_post_title(); } elseif ( is_category() ) { single_cat_title(); } ?></h1>
		<?php endif; ?> <!--End the hide title-->
			
			<?php $portal_category = get_theme_mod( 'hovercraft_portal_category', 'none' );
			if (is_category( $portal_category )) { ?>
			<br>
			<form role="search" method="get" class="searchform" action="<?php $category_link = get_category_link( $category_id );
											  echo esc_url( $category_link ); ?>">
			<div class="searchform-items">
			<input type="search" class="searchinput" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php 
				$cattitle = single_cat_title('', false);
				$lowercattitle = strtolower($cattitle);
				echo "Search {$lowercattitle}..."; ?>" />
			</div><!-- searchform-items -->
			</form><!-- searchform -->
			<?php } ?>
		
		<?php if (is_front_page()) : ?>
		
			<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) || has_excerpt() ) : ?>
				<div class="hero-snippet">
					<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) {
						add_filter('widget_title', '__return_false');
						dynamic_sidebar( 'hovercraft_hero_snippet' ); // https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar
						remove_filter('widget_title', '__return_false');
					} else the_excerpt();
					?>
				</div><!-- hero-snippet -->
			<?php endif; ?>
			
		<?php endif; ?><!-- is_front_page -->
	
		<?php if (is_front_page()) : ?>
		<div class="cta-hero-wrapper">
		<?php
			if ( has_nav_menu( 'cta-hero-primary' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-hero-primary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-hero-primary'
    		) );
			}
		?>
		<?php
			if ( has_nav_menu( 'cta-hero-secondary' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-hero-secondary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-hero-secondary'
    		) );
			}
		?>
		</div><!-- cta-hero-wrapper -->
		<?php endif; ?>
			
	</div><!-- welcome-wrapper -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-main-mini -->
	
</div><!-- hero-mini -->
