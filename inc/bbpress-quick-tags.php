<?php

add_action( 'wp_footer', 'swap_js_body_tags' );

function swap_js_body_tags() {
   remove_action( 'wp_footer', 'swap_js_body_tags' );
   echo "<script>document.body.className = document.body.className.replace('no-js','js');</script>\n";
}

// https://bbpress.trac.wordpress.org/ticket/3445
// https://slickstack.io/forum/topic/quicktags-toolbar-on-this-forum
