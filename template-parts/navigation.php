<div class="inner">
	<div class="header-left">
		<a href="<?php echo home_url(); ?>">
		<div id="branding">
		<div class="branding-left">
		<div class="site-logo" style="background:url(<?php 
$hovercraft_default_logo_id = get_theme_mod( 'custom_logo' );
$logo_default_url = wp_get_attachment_image_src( $hovercraft_default_logo_id , 'full' );
$logo_alternative_url = get_theme_mod( 'hovercraft_logo_transparent' );
// $logo_alternative_url = wp_get_attachment_image_src( $hovercraft_alternative_logo_id , 'full' );
// if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } 
if (is_front_page()) { echo $logo_alternative_url; } else { echo esc_url( $logo_default_url[0]); }
?>);
background-position: center center;
background-size:contain;
background-repeat:no-repeat;"></div>
		</div><!-- branding-left -->
		<div class="branding-right">
		<div class="site-title"><?php 
			if ( (get_theme_mod('header_text') != 0) && (get_bloginfo('name') != '') ) {
  echo '<div class="site-name">' . get_bloginfo('name') . '</div>';
}
			// echo get_bloginfo( 'name' ); 
			?></div>
		<div class="site-tagline"><?php 
			if ( (get_theme_mod('header_text') != 0) && (get_bloginfo('description') != '') ) {
  echo '<div class="site-description">' . get_bloginfo('description') . '</div>';
}
			// echo get_bloginfo( 'description' ); 
			?></div>
		</div><!-- branding-right -->
	</div></a><!-- branding -->
	<div class="clear"></div>
	</div><!-- header-left -->
	
	<div class="header-right">
	<div class="menu-choose">
		<div class="menu-desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class'	=> 'menu-wrapper' ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'cta-header', 'container_class'	=> 'cta-header' ) ); ?>
			<div class="search"><a href="#"><i class="material-icons search">search</i></a></div>
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<div class="cart"><a href="/cart/"><i class="material-icons cart">shopping_cart</i></a><div class="notification-dot"><?php echo WC()->cart->get_cart_contents_count(); ?><div class="clear"></div></div></div>
		<?php } ?>
		</div><!-- menu-desktop -->
		<div class="menu-mobile"><i class="material-icons menu">menu</i></div>
		</div><!--menu-choose -->
	<div class="clear"></div>
	</div><!-- header-right -->
		
<div class="clear"></div>
</div><!-- inner -->
