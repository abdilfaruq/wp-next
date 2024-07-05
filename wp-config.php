<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-next' );

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
define( 'AUTH_KEY',         'QzKPnoZVqb7LUPBO1deL3ilog1PT4gMKjKqyZxGeXzgsSuFruw44DfSs3r10mBBt' );
define( 'SECURE_AUTH_KEY',  '1cQiruf7PbGoFxtgPD4Gqq14bdUv1dqAlaMME8yPZhvPuXNEmqM7FboURCAfYwvI' );
define( 'LOGGED_IN_KEY',    '2vAuU29rZzGEknpePrE9d4iiqSSN0lpwICkXKWEW1yFTqmpntVVg4EaXH4HbQyRs' );
define( 'NONCE_KEY',        'm8Jon1sSHvCQHoFqljNhtqt6lTDSPv4IeWThNaGg3p3GwpMjXVy0yLOx1P11zO6t' );
define( 'AUTH_SALT',        '12iZPtcqX2u2MBhRmgs8cwxrWhdK3Ho0R8vLNMEN7QCbN7VrPpEOavmFKUuKaiaM' );
define( 'SECURE_AUTH_SALT', 'WoWdRKxRGqSxMMYUrR7hfvUu3TOQjII8dFXUmQmqctSOOHWD8yBJZu7ZITzAXhJJ' );
define( 'LOGGED_IN_SALT',   'pSoEG3dSj1XbTFEzbn0JMkh7XQGLjbopAsROESk6kc1aVhRSm8zJjExkQdaSozSn' );
define( 'NONCE_SALT',       'PlWGY99FYhWQo0iSg8dW6iYazBW9VHOSMTVe7ds7Gv6dcL9oKxuolUIY4c1qmOk5' );
define('JWT_AUTH_SECRET_KEY', '&1.MyIg};AD1yYK4<8P)');
define('JWT_AUTH_CORS_ENABLE', true);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
