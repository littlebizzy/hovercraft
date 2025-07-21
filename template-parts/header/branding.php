<div id="branding">

<?php
$logo_default_url = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
$logo_alternative_url = get_theme_mod( 'hovercraft_logo_alternative' );
$logo_location_setting = get_theme_mod( 'hovercraft_logo_alternative_location', 'none' );

$use_alternative_logo = false;

// determine when to show the alternative logo
if ( $logo_alternative_url ) {
    if ( $logo_location_setting === 'full_hero_only' && is_page_template() && strpos( get_page_template_slug(), 'full-hero' ) !== false ) {
        $use_alternative_logo = true;
    } elseif ( $logo_location_setting === 'full_and_half_hero' && is_page_template() && (
        strpos( get_page_template_slug(), 'full-hero' ) !== false || 
        strpos( get_page_template_slug(), 'half-hero' ) !== false
    ) ) {
        $use_alternative_logo = true;
    } elseif ( $logo_location_setting === 'full_and_half_and_mini_hero' && is_page_template() && (
        strpos( get_page_template_slug(), 'full-hero' ) !== false || 
        strpos( get_page_template_slug(), 'half-hero' ) !== false || 
        strpos( get_page_template_slug(), 'mini-hero' ) !== false
    ) ) {
        $use_alternative_logo = true;
    }
}
?>

<?php if ( $logo_default_url || $logo_alternative_url ) { ?>
<div class="branding-media">
    <a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
        <img class="site-logo custom-logo" src="<?php echo esc_url( $use_alternative_logo ? $logo_alternative_url : $logo_default_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo" />
    </a>
</div><!-- branding-media -->
<?php } ?>

<?php if ( display_header_text() ) { ?>
<div class="branding-text">
    <a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home">
        <div class="site-title"><?php echo get_bloginfo( 'name' ); ?></div>
    </a>
    <div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
</div><!-- branding-text -->
<?php } ?>

</div><!-- branding -->
