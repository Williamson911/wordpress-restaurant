<?php
<<<<<<< HEAD
=======

>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b
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
<<<<<<< HEAD
=======
 * This has been slightly modified (to read environment variables) for use in Docker.
 *
>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

<<<<<<< HEAD
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DEujpQDtzR' );

/** MySQL database username */
define( 'DB_USER', 'DEujpQDtzR' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oXZu3tMXXn' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
=======
// IMPORTANT: this file needs to stay in-sync with https://github.com/WordPress/WordPress/blob/master/wp-config-sample.php
// (it gets parsed by the upstream wizard in https://github.com/WordPress/WordPress/blob/f27cb65e1ef25d11b535695a660e7282b98eb742/wp-admin/setup-config.php#L356-L392)

// a helper function to lookup "env_FILE", "env", then fallback
if (!function_exists('getenv_docker')) {
	// https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
	function getenv_docker($env, $default)
	{
		if ($fileEnv = getenv($env . '_FILE')) {
			return rtrim(file_get_contents($fileEnv), "\r\n");
		} else if (($val = getenv($env)) !== false) {
			return $val;
		} else {
			return $default;
		}
	}
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'DEujpQDtzR'));

/** MySQL database username */
define('DB_USER', getenv_docker('WORDPRESS_DB_USER', 'DEujpQDtzR'));

/** MySQL database password */
define('DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'oXZu3tMXXn'));

define('FS_METHOD', 'direct');
/**
 * Docker image fallback values above are sourced from the official WordPress installation wizard:
 * https://github.com/WordPress/WordPress/blob/f9cc35ebad82753e9c86de322ea5c76a9001c7e2/wp-admin/setup-config.php#L216-L230
 * (However, using "example username" and "example password" in your database is strongly discouraged.  Please use strong, random credentials!)
 */

/** MySQL hostname */
define('DB_HOST', getenv_docker('WORDPRESS_DB_HOST', 'remotemysql.com'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', getenv_docker('WORDPRESS_DB_CHARSET', 'utf8mb4'));

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', getenv_docker('WORDPRESS_DB_COLLATE', ''));
>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
<<<<<<< HEAD
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
=======
define('AUTH_KEY',         getenv_docker('WORDPRESS_AUTH_KEY',         'bb9195d0cb2aeb036cca3d9bd8c46efaddb6bf55'));
define('SECURE_AUTH_KEY',  getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  '46c7a17d741641da87147b01ecb0fe6022570aff'));
define('LOGGED_IN_KEY',    getenv_docker('WORDPRESS_LOGGED_IN_KEY',    '3230aa44c69f482ea66b1c2f7187141b4a9b88e8'));
define('NONCE_KEY',        getenv_docker('WORDPRESS_NONCE_KEY',        'c52eff4ba3efd9d27e7747a25c275e6bd0d4e59b'));
define('AUTH_SALT',        getenv_docker('WORDPRESS_AUTH_SALT',        'cfdad959cf3c440672a2115f10aff6b329c58743'));
define('SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', '4ca644ef38973bcce843b9fc7b3bd97272ee064c'));
define('LOGGED_IN_SALT',   getenv_docker('WORDPRESS_LOGGED_IN_SALT',   '040dc46698b02cdc364c573374cf9418dc38676c'));
define('NONCE_SALT',       getenv_docker('WORDPRESS_NONCE_SALT',       '8f767ed59ff475328827c5ee2cd4617bedf1b424'));
// (See also https://wordpress.stackexchange.com/a/152905/199287)
>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
<<<<<<< HEAD
$table_prefix = 'wp_';
=======
$table_prefix = getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');
>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b

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
<<<<<<< HEAD
define( 'WP_DEBUG', false );
=======
define('WP_DEBUG', !!getenv_docker('WORDPRESS_DEBUG', ''));

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
// (we include this by default because reverse proxying is extremely common in container environments)

if ($configExtra = getenv_docker('WORDPRESS_CONFIG_EXTRA', '')) {
	eval($configExtra);
}
>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
<<<<<<< HEAD
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
=======
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
>>>>>>> 3476ffdba94e090e5e3420861c02a7010f88098b
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
