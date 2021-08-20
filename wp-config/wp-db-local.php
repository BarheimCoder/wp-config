<?php
// Prevent file from being accessed directly
if (!defined('ABSPATH')) exit();

// Add database credentials
define('DB_NAME',     '');
define('DB_USER',     '');
define('DB_PASSWORD', '');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

// Use https://api.wordpress.org/secret-key/1.1/salt/ to generate
define( 'AUTH_KEY',         '' );
define( 'SECURE_AUTH_KEY',  '' );
define( 'LOGGED_IN_KEY',    '' );
define( 'NONCE_KEY',        '' );
define( 'AUTH_SALT',        '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT',   '' );
define( 'NONCE_SALT',       '' );

$table_prefix = 'wp_';

// Debug options
define('WPLANG',   '');
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false );