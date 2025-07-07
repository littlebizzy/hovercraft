<?php
// styles for full hero
?>

<?php
function hovercraft_get_hero_background(
    $gradient_tones,
    $gradient_angle,
    $gradient_start_color,
    $gradient_start_opacity,
    $gradient_start_position,
    $gradient_mid_color,
    $gradient_mid_opacity,
    $gradient_mid_position,
    $gradient_stop_color,
    $gradient_stop_opacity,
    $gradient_stop_position,
    $background_image_url
) {
    if ($gradient_tones === 'two_tones') {
        list($r1, $g1, $b1) = sscanf($gradient_start_color, "#%02x%02x%02x");
        $start = "rgba({$r1}, {$g1}, {$b1}, {$gradient_start_opacity}) {$gradient_start_position}%";

        list($r2, $g2, $b2) = sscanf($gradient_stop_color, "#%02x%02x%02x");
        $stop = "rgba({$r2}, {$g2}, {$b2}, {$gradient_stop_opacity}) {$gradient_stop_position}%";

        $background = "linear-gradient({$gradient_angle}, {$start}, {$stop})";
    } elseif ($gradient_tones === 'three_tones') {
        list($r1, $g1, $b1) = sscanf($gradient_start_color, "#%02x%02x%02x");
        $start = "rgba({$r1}, {$g1}, {$b1}, {$gradient_start_opacity}) {$gradient_start_position}%";

        list($r2, $g2, $b2) = sscanf($gradient_mid_color, "#%02x%02x%02x");
        $mid = "rgba({$r2}, {$g2}, {$b2}, {$gradient_mid_opacity}) {$gradient_mid_position}%";

        list($r3, $g3, $b3) = sscanf($gradient_stop_color, "#%02x%02x%02x");
        $stop = "rgba({$r3}, {$g3}, {$b3}, {$gradient_stop_opacity}) {$gradient_stop_position}%";

        $background = "linear-gradient({$gradient_angle}, {$start}, {$mid}, {$stop})";
    } else {
        return '';
    }

    if (!empty($background_image_url)) {
        $background .= ", url({$background_image_url})";
    }

    return $background;
}
?>

#hero-full-container {
    background: <?php echo hovercraft_get_hero_background(
        $hero_gradient_tones,
        $hero_gradient_angle,
        $hero_gradient_start_color,
        $hero_gradient_start_color_transparency,
        $hero_gradient_start_color_length,
        $hero_gradient_mid_color,
        $hero_gradient_mid_color_transparency,
        $hero_gradient_mid_color_length,
        $hero_gradient_stop_color,
        $hero_gradient_stop_color_transparency,
        $hero_gradient_stop_color_length,
        $hero_image
    ); ?>;
    background-position: <?php echo str_replace('_',' ', $full_hero_background_position); ?>;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
    padding: 0;
    display: table;
    position: relative;
}

video.hero-background-video {
    width: 100%; /* correct */
    height: 100%; /* correct */
    object-fit: cover; /* simulates background-size: cover */
    position: absolute; /* correct */
    top: 0;
    left: 0;
}

.hero-background-video-overlay {
    width: 100%; /* correct */
    height: 100%; /* correct */
    object-fit: cover; /* simulates background-size: cover */
    position: absolute; /* correct */
    top: 0;
    left: 0;
    background: <?php echo hovercraft_get_hero_background(
        $hero_gradient_tones,
        $hero_gradient_angle,
        $hero_gradient_start_color,
        $hero_gradient_start_color_transparency,
        $hero_gradient_start_color_length,
        $hero_gradient_mid_color,
        $hero_gradient_mid_color_transparency,
        $hero_gradient_mid_color_length,
        $hero_gradient_stop_color,
        $hero_gradient_stop_color_transparency,
        $hero_gradient_stop_color_length,
        $hero_image
    ); ?>;
    background-position: top center;
    background-size: cover;
    background-repeat: no-repeat;
}

.hero-full-wrapper {
    display: table-row; /* correct */
}

.hero-full {
    width: 100%;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
}

.hero-full-main {
    position: relative; /* required when using video background on splash-wide */
}

@media screen and (max-width: 1200px) {
#header-full-hero {
    width: 100%;
    display: table;
    padding: 10px 20px;
    background: <?php list($r1, $g1, $b1) = sscanf($full_hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
    position: relative; /* required when using video background on splash-wide */
    color: #ffffff;
    }
}

@media screen and (min-width: 1200px) {
#header-full-hero {
    width: 100%;
    display: table;
    margin: 0px auto;
    padding: 20px 0px;
    background: <?php list($r1, $g1, $b1) = sscanf($full_hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
    position: relative; /* required when using video background on splash-wide */
    color: #ffffff;
    }
}

@media screen and (max-width: 1200px) {
h1.full-hero-title {
    font-weight: 700;
    margin-bottom: 30px;
    color: #ffffff;
    }
}

@media screen and (min-width: 1200px) {
h1.full-hero-title {
    font-weight: 700;
    margin-bottom: 30px;
    color: #ffffff;
    }
}
