<?php
$hovercraft_desktop_header_width = get_theme_mod( 'hovercraft_desktop_header_width', 'fixed' );
?>

<?php if ( 'fixed' === $hovercraft_desktop_header_width ) : ?>
	<div class="inner">
<?php else : ?>
	<div class="full">
<?php endif; ?>

	<div class="header-left">
		<?php get_template_part( 'template-parts/header/branding' ); ?>
	</div><!-- header-left -->
	
	<div class="header-right">
	<div class="menu-choose">
		
		<div class="menu-mobile-wrapper">
			<?php
			$search_icon_status = get_theme_mod( 'hovercraft_search_icon', 'desktop_only' );
			?>

			<?php if ( in_array( $search_icon_status, array( 'mobile_only', 'desktop_and_mobile' ), true ) ) : ?>
				<div class="search-icon-wrapper">
					<?php
					$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
					?>

					<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
						<i class="material-icons search">search</i>
					<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
						<i class="fas fa-search"></i>
					<?php endif; ?>
				</div><!-- search-icon-wrapper -->
			<?php endif; ?>
			
			<?php if ( class_exists( 'WooCommerce' ) && function_exists( 'WC' ) && WC()->cart ) : ?>
				<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
					<?php
					$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
					?>

					<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
						<i class="material-icons shopping_cart">shopping_cart</i>
					<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
						<i class="fas fa-shopping-cart"></i>
					<?php endif; ?>
				</a>
				<div class="notification-dot"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></div><!-- notification-dot -->
			<?php endif; ?>
			
	 		<?php
			$hovercraft_mobile_menu = get_theme_mod( 'hovercraft_mobile_menu', 'accordion' );
			?>

			<?php if ( 'overlay' === $hovercraft_mobile_menu ) : ?>
				<button type="button" class="nav-icon mobile-menu-trig" onclick="hovercraftOpenNav()">
			<?php else : ?>
				<button type="button" class="nav-icon mobile-menu-trig hovercraft-offcanvas-trigger">
			<?php endif; ?>

			<?php
			$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
			?>

			<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
				<i class="material-icons menu">menu</i>
			<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
				<i class="fa-solid fa-bars"></i>
			<?php endif; ?>
			</button>
			
		</div><!--menu-mobile-wrapper -->
		
		<div class="menu-desktop">
			<?php
			if ( has_nav_menu( 'main-menu' ) ) {
				wp_nav_menu( array(
					'theme_location'  => 'main-menu',
					'menu_class'      => 'menu',
					'container_class' => 'main-menu',
				) );
			} else {
				echo '<div class="main-menu"><ul class="menu">';
				wp_list_pages( array( 'title_li' => '' ) );
				echo '</ul></div>';
			}
			?>
			
			<?php
			$search_icon_status = get_theme_mod( 'hovercraft_search_icon', 'desktop_only' );
			?>

			<?php if ( in_array( $search_icon_status, array( 'desktop_only', 'desktop_and_mobile' ), true ) ) : ?>
				<div class="search-icon-wrapper">
					<?php
					$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
					?>

					<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
						<i class="material-icons search">search</i>
					<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
						<i class="fas fa-search"></i>
					<?php endif; ?>
				</div><!-- search-icon-wrapper -->
			<?php endif; ?>
			
			<?php if ( class_exists( 'WooCommerce' ) && function_exists( 'WC' ) && WC()->cart ) : ?>
				<div class="cart-icon-wrapper">
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
						<?php
						$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
						?>

						<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
							<i class="material-icons shopping_cart">shopping_cart</i>
						<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
							<i class="fas fa-shopping-cart"></i>
						<?php endif; ?>
					</a>
					<div class="notification-dot"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></div>
				</div><!-- cart-icon-wrapper -->
			<?php endif; ?>
			
			<?php
			if ( has_nav_menu( 'cta-header-secondary' ) ) {
				wp_nav_menu( array(
					'theme_location'  => 'cta-header-secondary',
					'menu_class'      => 'cta',
					'container_class' => 'cta-header-secondary',
				) );
			}

			if ( has_nav_menu( 'cta-header-primary' ) ) {
				wp_nav_menu( array(
					'theme_location'  => 'cta-header-primary',
					'menu_class'      => 'cta',
					'container_class' => 'cta-header-primary',
				) );
			}
			?>
		</div><!-- menu-desktop -->
		
	</div><!--menu-choose -->
	<div class="clear"></div>
	</div><!-- header-right -->
		
<div class="clear"></div>
</div><!-- inner -->
