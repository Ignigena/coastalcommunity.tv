<?php
  // Redirect www requests to the bare-domain version.
  if (isset($_SERVER['PANTHEON_ENVIRONMENT']) && $_SERVER['PANTHEON_ENVIRONMENT'] === 'live') {
    if ($_SERVER['HTTP_HOST'] == 'www.coastalcommunity.tv') {
      header('HTTP/1.0 301 Moved Permanently');
      header('Location: http://coastalcommunity.tv'. $_SERVER['REQUEST_URI']);
      exit();
    }
  }

  // Set the node ID for Podcaster linkage.
  // @todo: This should be moved to a setting form once the API is finalized.
  $_SERVER['BETHEL_PODCASTER'] = 4;

  extract(json_decode($_SERVER['PRESSFLOW_SETTINGS'], TRUE));
  require_once DRUPAL_ROOT . '/sites/all/modules/domain/settings.inc';

  $conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
  $conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
  $conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

  drupal_fast_404();
