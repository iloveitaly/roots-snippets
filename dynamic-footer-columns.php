<?php

// http://discourse.roots.io/t/multi-colum-widgetized-footer/489/3

function roots_footer_sidebar_params($params) {

  $sidebar_id = $params[0]['id'];

  if ( $sidebar_id == 'sidebar-footer' ) {

    $total_widgets = wp_get_sidebars_widgets();
    $sidebar_widgets = count($total_widgets[$sidebar_id]);

    $params[0]['before_widget'] = str_replace('<section class="widget ', '<section class="widget col-xs-12 col-md-' . floor(12 / $sidebar_widgets) . ' ', $params[0]['before_widget']);
  }

  return $params;
}

add_filter('dynamic_sidebar_params','roots_footer_sidebar_params');

?>
