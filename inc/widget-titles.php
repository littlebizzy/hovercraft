<?php

// disable certain widget titles
function my_widget_title($id_base) {
      if ('hovercraft_copyright' == $id_base) {
      		return '';
      }
      else {
        return $title;
      }
    }

// https://presscustomizr.com/snippet/dynamically-changing-the-widget-title-depending-on-the-context/
// FIX NEEDED: Undefined variable $title in /var/www/html/wp-content/themes/hovercraft/inc/widget-titles.php on line 9 
