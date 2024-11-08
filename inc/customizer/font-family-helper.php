<?php
function hovercraft_available_fonts() {
    // get and format the first font family for google fonts
    $first_font_family = get_theme_mod('hovercraft_first_font_family', 'noto_sans');
    $first_font_family_final = ucwords(str_replace('_', ' ', ucfirst($first_font_family)));

    // get and format the second font family for google fonts
    $second_font_family = get_theme_mod('hovercraft_second_font_family', 'open_sans');
    $second_font_family_final = ucwords(str_replace('_', ' ', ucfirst($second_font_family)));

    // get and format the third font family for google fonts
    $third_font_family = get_theme_mod('hovercraft_third_font_family', 'roboto');
    $third_font_family_final = ucwords(str_replace('_', ' ', ucfirst($third_font_family)));

    // get and format the multilingual font family for google fonts
    $multilingual_font_family = get_theme_mod('hovercraft_multilingual_font_family', 'none');
    $multilingual_font_family_final = ucwords(str_replace('_', ' ', ucfirst($multilingual_font_family)));

    // initialize an array for font families with the default option included
    $hovercraft_font_families = array(
        '' => __('default (unspecified)', 'hovercraft'), // always include this as the first option
    );

    // add each formatted font family to the array if it's not empty or 'none'
    if (!empty($first_font_family) && $first_font_family !== 'none') {
        $hovercraft_font_families[$first_font_family] = $first_font_family_final;
    }

    if (!empty($second_font_family) && $second_font_family !== 'none') {
        $hovercraft_font_families[$second_font_family] = $second_font_family_final;
    }

    if (!empty($third_font_family) && $third_font_family !== 'none') {
        $hovercraft_font_families[$third_font_family] = $third_font_family_final;
    }

    if (!empty($multilingual_font_family) && $multilingual_font_family !== 'none') {
        $hovercraft_font_families[$multilingual_font_family] = $multilingual_font_family_final;
    }

    return $hovercraft_font_families;
}

// Ref: ChatGPT
