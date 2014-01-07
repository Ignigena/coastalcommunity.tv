<?php
  // Provide < PHP 5.3 support for the __DIR__ constant.
  if (!defined('__DIR__')) {
    define('__DIR__', dirname(__FILE__));
  }

  require_once __DIR__ . '/includes/form.inc';

  function coastal_preprocess_html(&$variables) {
    drupal_add_js(drupal_get_path('theme', 'coastal') . '/js/coastal.js', array('group' => JS_THEME));
  }
  
  function coastal_page_alter(&$page) {
    if (arg(0) == "blog" && !arg(1)) {
      drupal_set_title("Coastal Blog");
    }
  }
  
  function coastal_views_pre_render(&$view) {
    if ($view->name == "locations" && $view->result[0]->field_field_address) {
      // Adds the human-readable address field to the locations map.
      $view->set_item('default', 'footer', 'text', 'content', $view->result[0]->field_field_address[0]['rendered']['#markup']);
      
      $location_address = $view->result[0]->field_field_address[0]['raw']['value'];

      $options = array(
        'id' => 'area',
        'table' => 'views',
        'field' => 'area',
        'empty' => FALSE,
        'content' => l($location_address, 'http://maps.google.com/?q=' . $location_address, array('attributes' => array('target'=>'_blank'))),
        'format' => 'filtered_html',
        'tokenize' => 0,
      );
      $view->display_handler->set_option('footer', array('text' => $options));
    }
  }
