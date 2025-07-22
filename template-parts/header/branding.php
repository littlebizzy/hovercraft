<div id="branding">

<?php
// get logo urls and settings
$default_logo = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
$alternative_logo = get_theme_mod( 'hovercraft_logo_alternative' );
$logo_location = get_theme_mod( 'hovercraft_logo_alternative_location', 'none' );
$template_slug = get_page_template_slug();

// default to default logo
$logo_url = $default_logo;

if ( $alternative_logo && $logo_location !== 'none' ) {
    $location_map = array(
        'full_hero_only' => array( 'full-hero' ),
        'half_hero_only' => array( 'half-hero' ),
        'mini_hero_only' => array( 'mini-hero' ),
        'basic_hero_only' => array( 'basic-hero' ),
        'full_and_half_hero' => array( 'full-hero', 'half-hero' ),
        'full_and_mini_hero' => array( 'full-hero', 'mini-hero' ),
        'full_and_basic_hero' => array( 'full-hero', 'basic-hero' ),
        'half_and_mini_hero' => array( 'half-hero', 'mini-hero' ),
        'half_and_basic_hero' => array( 'half-hero', 'basic-hero' ),
        'mini_and_basic_hero' => array( 'mini-hero', 'basic-hero' ),
        'full_half_mini_hero' => array( 'full-hero', 'half-hero', 'mini-hero' ),
        'full_half_basic_hero' => array( 'full-hero', 'half-hero', 'basic-hero' ),
        'full_mini_basic_hero' => array( 'full-hero', 'mini-hero', 'basic-hero' ),
        'half_mini_basic_hero' => array( 'half-hero', 'mini-hero', 'basic-hero' ),
        'full_half_mini_basic_hero' => array( 'full-hero', 'half-hero', 'mini-hero', 'basic-hero' ),
    );

    if ( isset( $location_map[ $logo_location ] ) ) {
        foreach ( $location_map[ $logo_location ] as $match ) {
            if ( strpos( $template_slug, $match ) !== false ) {
                $logo_url = $alternative_logo;
                break;
            }
        }
    }
}

// bail if no logo
if ( ! $logo_url ) {
    return;
}
?>

<div class="branding-media">
    <a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
        <img class="site-logo custom-logo" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo" />
    </a>
</div><!-- branding-media -->

<?php if ( display_header_text() ) : ?>
<div class="branding-text">
    <a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home">
        <div class="site-title"><?php echo get_bloginfo( 'name' ); ?></div>
    </a>
    <div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
</div><!-- branding-text -->
<?php endif; ?>

</div><!-- branding -->
