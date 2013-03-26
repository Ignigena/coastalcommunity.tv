<?php

/**
 * @file
 * Default template for admin toolbar.
 *
 * Available variables:
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default value has the following:
 *   - toolbar: The current template type, i.e., "theming hook".
 * - $toolbar['toolbar_user']: User account / logout links.
 * - $toolbar['toolbar_menu']: Top level management menu links.
 * - $toolbar['toolbar_drawer']: A place for extended toolbar content.
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_toolbar()
 *
 * @ingroup themeable
 */
?>
<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container" style="width: auto; padding: 0 20px;">
      <a class="brand" href="http://getbethel.com/" target="_blank">Bethel</a>
      <ul class="nav">
        <li class="active"><a href="#"><i class="icon-home"></i></a></li>
        <?php
          foreach ($toolbar['toolbar_menu']['#links'] as $link) {
            $nav_link = l($link['title'], $link['href'], array('attributes' => $link['attributes'], 'html' => TRUE));
            print '<li>' . $nav_link . '</li>';
          }
        ?>
      </ul>
    </div>
  </div>
</div>