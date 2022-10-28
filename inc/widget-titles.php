<?php

// disable copyright widget title
// https://presscustomizr.com/snippet/dynamically-changing-the-widget-title-depending-on-the-context/
function my_widget_title($id_base) {
      if ('hovercraft_copyright' == $id_base) {
      		return '';
      }
      else {
        return $title;
      }
    }
