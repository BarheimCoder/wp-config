<?php

// Set your environment/url pairs
$environments = array(
  'local'       => 'localhost',
  'development' => 'dev.website.com',
  'production'  => 'website.com'
);

// Get the hostname
$http_host = $_SERVER['HTTP_HOST'];

// Loop through $environments to see if there’s a match
foreach($environments as $environment => $hostname) {
  if (stripos($http_host, $hostname) !== FALSE) {
    define('ENVIRONMENT', $environment);
    break;
  }
}

// Exit if ENVIRONMENT is undefined
if (!defined('ENVIRONMENT')) exit('No database configured for this host');

// Location of environment-specific configuration
$wp_db_config = 'wp-config/wp-db-' . ENVIRONMENT . '.php'; 

// Check to see if the configuration file for the environment exists
if (file_exists(__DIR__ . '/' . $wp_db_config)) {
  require_once($wp_db_config);
} else {
  // Exit if configuration file does not exist
  exit('No database configuration found for this host');
}

/* That’s all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');