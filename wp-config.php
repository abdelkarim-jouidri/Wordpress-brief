<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Shop-Bag' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZXelX2rW781wVrJd8FYtHftHDGsNsERhxVcyINe4tLqT6f0WdwylYIbgh0m2p365' );
define( 'SECURE_AUTH_KEY',  'muAOl5z4hJtsmHbYVY5EuqV9oAXvBZUBTO1qt5OdFQENh2tEEJk8JoASx2WdKhqV' );
define( 'LOGGED_IN_KEY',    'v9GipbPeFJ468o4qJpSASyzMjM38yWyrVdmE0EGOHyTaSuBRvC4aLk8lmcwjnckb' );
define( 'NONCE_KEY',        'SzbggOZSrknSfDyeHGz6hNlroWBMGiSmQ29vAOUgJLNwoiQUWtkxaNshUorVNbWP' );
define( 'AUTH_SALT',        'tO5IVZ41zwrRMpHqOO9cI0e5E4BvZ6RlEelXNyuyNtkSPteNVg9fYNCHaCH62egS' );
define( 'SECURE_AUTH_SALT', 'Usa5kCSO0r8U869s7VDh771PpRHRxlSVCx4lGEh7VQVEwihVeZsLnBnG4vGzMM1T' );
define( 'LOGGED_IN_SALT',   'bvukwJtib6p4fGTly15lrEGHGlSQj5U5IXgFf7hU8QARsLYhQDi8pbJez6op5RbR' );
define( 'NONCE_SALT',       'wdvIv9Kcj3uoUH7tUUC06Wxhh7BY1dhFFlS2BrFXjziceLqSl1qqgvsuzwlOJo96' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
