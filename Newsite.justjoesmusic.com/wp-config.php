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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6341027_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6341027_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'F.tWzjVsfJcbpC2Q5SX31' );

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
define('AUTH_KEY',         'qLPU2cQCYGUmJZe13ypHS0pWVns4h5yKbWdp9Ky2PuGuzbJvWcoa9PhlDKQNwFL0');
define('SECURE_AUTH_KEY',  'R48r7078NKXg5hq5efBnWRGH9ZwxPhaAxzrXHALItYm76WuMsD64Gsm0FKG8nZRJ');
define('LOGGED_IN_KEY',    'qjx8v78lMYFU09wBlz7a0xLRDqI7vmD30EsjRdzsjAIHnRiy1CVyN1Io4zSKo3iL');
define('NONCE_KEY',        'ybUdKJIWOX6vj6E0rndkRJK6WvhHF5cyKKKyuIFkMhuVgTxe0TL3kl0FYNt2XLHG');
define('AUTH_SALT',        'xWiTPZnzxyoOS5kIHWWK8mbzILMbNUbvn4OQvDPWw0NY7PAB7Lh2p3xau2OjWAov');
define('SECURE_AUTH_SALT', '2cmhZ3yN3bvzl2OC2hRGpoIuqVBUMtbsmwQB5KAwvh0oAEqhGjNVmoJlXdE81Sjo');
define('LOGGED_IN_SALT',   'Oj6Hks2Ha8p6ifCYao3ro2pgRvUV5i0s4TLY5noGJxIItGVmmV2fwpCNTv5XHjAw');
define('NONCE_SALT',       'cQkB7rPpOpVsN0nStCQWh95F6oB46bhG6Pj1CzQoT8btGn5OhvEXcHagqWdWFvu6');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
