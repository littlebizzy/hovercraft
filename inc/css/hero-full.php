<?php
// styles for full hero
?>

<?php
// get gradient background
function hovercraft_get_hero_gradient_background() {
    global $hero_gradient_tones,
           $hero_gradient_angle,
           $hero_gradient_start_color,
           $hero_gradient_start_opacity,
           $hero_gradient_start_position,
           $hero_gradient_mid_color,
           $hero_gradient_mid_opacity,
           $hero_gradient_mid_position,
           $hero_gradient_stop_color,
           $hero_gradient_stop_opacity,
           $hero_gradient_stop_position,
           $hero_background_image;

    if ($hero_gradient_tones === 'two_tones') {
        list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
        $start = "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_opacity}) {$hero_gradient_start_position}%";

        list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
        $stop = "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_opacity}) {$hero_gradient_stop_position}%";

        $gradient = "linear-gradient({$hero_gradient_angle}, {$start}, {$stop})";
    } elseif ($hero_gradient_tones === 'three_tones') {
        list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
        $start = "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_opacity}) {$hero_gradient_start_position}%";

        list($r2, $g2, $b2) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
        $mid = "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_mid_opacity}) {$hero_gradient_mid_position}%";

        list($r3, $g3, $b3) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
        $stop = "rgba({$r3}, {$g3}, {$b3}, {$hero_gradient_stop_opacity}) {$hero_gradient_stop_position}%";

        $gradient = "linear-gradient({$hero_gradient_angle}, {$start}, {$mid}, {$stop})";
    } else {
        return '';
    }

    if (!empty($hero_background_image)) {
        $gradient .= ", url({$hero_background_image})";
    }

    return $gradient;
}
?>

#hero-full-container,
.hero-background-video-overlay {
<?php if ($hero_gradient_tones === 'two_tones' || $hero_gradient_tones === 'three_tones') { ?>
    background: <?php echo hovercraft_get_hero_gradient_background(); ?>;
<?php } ?>
    background-position: <?php echo str_replace('_', ' ', $hero_background_position); ?>;
    background-size: cover;
    background-repeat: no-repeat;
}

video.hero-background-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}

.hero-background-video-overlay {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    background-position: top center;
}

#hero-full-container {
    width: 100%;
    height: 100%;
    padding: 0;
    display: table;
    position: relative;
}

.hero-full-wrapper {
    display: table-row;
}

.hero-full {
    width: 100%;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
}

.hero-full-main {
    position: relative;
}

@media screen and (max-width: 1200px) {
    #header-full-hero {
        width: 100%;
        display: table;
        padding: 10px 20px;
        background: <?php list($r1, $g1, $b1) = sscanf($hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$hero_header_background_opacity})"; ?>;
        position: relative;
        color: #ffffff;
    }
}

@media screen and (min-width: 1200px) {
    #header-full-hero {
        width: 100%;
        display: table;
        margin: 0px auto;
        padding: 20px 0px;
        background: <?php list($r1, $g1, $b1) = sscanf($hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$hero_header_background_opacity})"; ?>;
        position: relative;
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
