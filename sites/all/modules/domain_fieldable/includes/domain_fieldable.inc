<?php

/**
 * @file
 * Provides the controller for Domain Fieldable.
 */

class DomainFieldableController extends EntityAPIController {
  public function __construct($entityType) {
    parent::__construct($entityType);
  }

  public function create(array $values = array()) {

    $values += array( 
      'domain_id' => '',
      'is_new' => TRUE,
      'created' => REQUEST_TIME,
      'changed' => REQUEST_TIME,
      'data' => '',
    );
    
    $nota = parent::create($values);
    return $nota;
  }
  
  public function buildContent($entity, $view_mode = 'full', $langcode = NULL, $content = array()) {
    $content = parent::buildContent($entity, $view_mode, $langcode, $content);

    return $content;
  }
}
