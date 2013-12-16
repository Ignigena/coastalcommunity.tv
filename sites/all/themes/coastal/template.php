<?php
  // Provide < PHP 5.3 support for the __DIR__ constant.
  if (!defined('__DIR__')) {
    define('__DIR__', dirname(__FILE__));
  }

  require_once __DIR__ . '/includes/form.inc';

  function coastal_preprocess_html(&$variables) {
    drupal_add_js(drupal_get_path('theme', 'coastal') . '/js/coastal.js', array('group' => JS_THEME));
  }

  function coastal_html_head_alter(&$head_elements) {
    $head_elements['metatag_generator']['#value'] = 'Bethel (http://bethel.io)';
  }
