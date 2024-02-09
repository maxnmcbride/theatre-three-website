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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://localhost:10010');
define('WP_SITEURL', 'http://localhost:10010');

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'A2aVakTk0SKLFcJlnbUxh6asH7uTTndeqMwLuOj//UGlucebvapQsZJcJbZvDfSCdMWjlmBfpyfkSpNMOocE9w==');
define('SECURE_AUTH_KEY',  'CZGtBdFOrb1BMmYfKG4Osao5Usx5IQ4XtGz2fQYptW6HMcFzVQKU0oIaHtwGcqeWHJoV+cGXd6r/rBpoaj2MXg==');
define('LOGGED_IN_KEY',    'KTYx6QsT3LeYQtIJRYoSOR+GRWomIMxeVYJBkcevgMQ5NvM1d+lO8KUfJs5IVudHAZG6F25OD7+gPkYu7Vql2g==');
define('NONCE_KEY',        'vLoCcyAJe/ZJ7ffRLY7WsOgR0rJX7Kyixw0gmvz3VPOoxEc9oKd+g9BhH3DdXahgtYkvhADjJlJ9KmFtUhZnCw==');
define('AUTH_SALT',        'XB0N4TEI5UQp1l+QOz/ETarWlZgGczp3jnlgbwPA7Zk4qTBEmSjRZvSCyh9YX2YX6UVYPOlkC4l+Nx5Q48ChKA==');
define('SECURE_AUTH_SALT', '+mfU3POBb9En7DFxvE32IZA81dpK7tfLbljdBkF+4WHr8FmKBtXoR8PeBbnVGQ9sHygej1fiK2qcZTS8O69fhg==');
define('LOGGED_IN_SALT',   'CpjTWb+sin4FekpMbdW1on/S5r386CIa2Xl3+x+dlfiTUWDvo8FT1p1CI2+wtfI0UVuK7bFqWzQ2xkj3bLOXoA==');
define('NONCE_SALT',       'HnwcraKdWpt74b7l7VJEPKdJQ+vapBv6qh5SRpiGjb8tLECNsQU/wu2rr88xwNrP1+GMRAeWJsGru50P/IMudA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
