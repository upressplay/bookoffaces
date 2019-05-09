<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i5704432_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i5704432_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'V.EsA2p4qFFjE38I3tm70' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ytQg2BYsripSFw9KQTVB7Gr3mFWKZJXntb3LLKdSIknC3AYxzO7XP1cEiiExPvmv');
define('SECURE_AUTH_KEY',  '3grHAYIVMIuccBZwwrAnPqbWh3t1LfoEkilLnr09pXxXvGb1Xy1Mve6jwJ2rjjqy');
define('LOGGED_IN_KEY',    '1gQKOkOq4OL9a3sp63z5lm4PGmEUOANkIjwoGZPsC8eCXKydAt98fp02CXpJok2H');
define('NONCE_KEY',        'R4IapgzksvZkd2dxxhKp3FtkHrIAWp7ifKxU6J8WG5TQ6vyi5q36innJNWdGPi1J');
define('AUTH_SALT',        'cMIXo8aozZ4yrPESV4CNyHqAOnDsyYGwkEHgi8bhOCik0Gp8fC90BfEnpEFAnwS6');
define('SECURE_AUTH_SALT', '03KxLlSt3EtQcjxaENMZSK01fevOBZbSSalPZpHi4X9bYy1r1bB842edv5UeGlhk');
define('LOGGED_IN_SALT',   'BfcbRx38JC7u9GrL2dd00dYPPO2NuwM46B558XaSowDG9WVH0auomFS8fpjqIhlq');
define('NONCE_SALT',       'S9IKDcrVfZzffYekEmQXXeE3TopNkhmiEKkIgQmrmXEC1qUECFmwbd5jrN13U2cu');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
