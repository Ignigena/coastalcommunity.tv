<?php

/**
 * @file
 * Adds domain fieldable tokens to domain token type.
 */

/**
 * Implements hook_token_info().
 */
function domain_fieldable_token_info() {

  $info['types']['domain_fieldable'] = array(
    'name' => t('Domains Fieldable'),
    'description' => t('Tokens related to domains fieldable.'),
    'needs-data' => 'domain',
  );

  $info['tokens']['domain_fieldable'] = array();

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
      $data = array(
        'entity' => $domain_fieldable,
        'entity_type' => 'domain_fieldable',
        'token_type' => 'domain_fieldable'
      );
      $replacements += token_generate('entity', $domain_tokens, $data, $options);
    }
  }
  return $replacements;
}
