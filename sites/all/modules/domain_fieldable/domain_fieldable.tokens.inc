<?php

/**
 * @file
 * Adds domain fieldable tokens to domain token type.
 */

/**
 * Implements hook_token_info().
 */
function domain_fieldable_token_info() {

  $info['tokens']['domain']['fields'] = array(
    'name' => t('Fields'),
    'description' => t('Fields.'),
    'type' => 'domain_fieldable',
  );

  return $info;
}

/**
 * Implements hook_tokens().
 */
function domain_fieldable_tokens($type, $tokens, array $data = array(), array $options = array()) {
  $sanitize = !empty($options['sanitize']);

  $replacements = array();
  if ($type == 'domain' && !empty($data['domain'])) {
    $domain = $data['domain'];
    if ($domain_tokens = token_find_with_prefix($tokens, 'fields')) {
      $domain_fieldable = domain_fieldable_load($domain['domain_id']);
      $replacements += token_generate('domain_fieldable', $domain_tokens, array('domain_fieldable' => $domain_fieldable), $options);
    }
  }

  return $replacements;
}
