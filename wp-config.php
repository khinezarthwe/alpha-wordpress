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
define('DB_NAME', 'kzt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/** upload link */

define( 'UPLOADS', 'wp-content/uploads' );
define('WP_MEMORY_LIMIT', '64MB');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b6m>i?.z$~V<}jp=Kt 4!s<u/YO@}dQ8MUuaHTidBK_c8.$(XCK:y$Eg/5<EF,oj');
define('SECURE_AUTH_KEY',  'k@{[/OURMVi5)f&57z+^]<@CAwpF(x~5xVf&xfrWiAd$JP;w,w|!wk|{>IHwMbTw');
define('LOGGED_IN_KEY',    'VEMc,-/P|[H15exS$gm_Q6@Spq}6[=L75W9.|yJe$2;7%w nd,I!.]&`1z=T{6*M');
define('NONCE_KEY',        'L2)9At[ *QB@3,3/Z{lC,:>JEoxx^[u97M5`HDX@jN@@:}_X_ZR.1CEC_)g&.F.b');
define('AUTH_SALT',        'MYX3eb{#|~H*1Z/e.p5zs<T}2PX-:FW*2;d(TSE&PU/5SZwK6qAzs7Mw<@[ 5~lL');
define('SECURE_AUTH_SALT', '%nd7l^DY-!EJJP_7A;AXdBP,>q4-W!ID7$@>:0xlJ+B`@#B8:~NgJO8Yy`~{jTkq');
define('LOGGED_IN_SALT',   'ZKwfG~jcaume:h|NE1vfTe$Qf6wW,[f[At0Q2XH@72%fQ%zlmGbaf!`2(Gc%o/Ch');
define('NONCE_SALT',       'x5Skhv|O8D+1QGq2]lA.yIB(EOS2My6>le44Rt~uQ^ITp_rLDci6]9iC.Y m<7Cw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
