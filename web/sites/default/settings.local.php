<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/development.services.yml';

$databases['default']['default'] = array (
  'database' => 'drupal_nt_local',
  'username' => 'demo',
  'password' => 'demo',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);


