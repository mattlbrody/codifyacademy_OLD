<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', '/home1/sambrody/public_html/codifyacademy.com/wiki/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'sambrody_wrdp1');

/** MySQL database username */
define('DB_USER', 'sambrody_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', '74EFbkHfbkZoXVj');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|~_#^AUuHWtB;ylbku)/ajI^/v?AB2~Y8xdj@\`PtuFWg:jcntcFMM0J7$LLZq)Yo<<h6RlqV!TSI');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '_erJWO-/H7<04k5<u1A~InIi254~/o?=C$Lw2tlX5N4x@lGnvVAQHuTw#WxrpwIv-$Z');
define('NONCE_KEY',        'hSsa9BqnP^R!3aay!8CkQ:m^m=z@3@U1ah^q1Cd!XmLh#JNEK:4^Z_Q3');
define('AUTH_SALT',        'cV*y_?vw42-9bIYIjWzSFT0^FANm!o(Oq|CTUtmWpdS;>x\`@nI-0Ir1<kz5iiiKQv6e~w-O');
define('SECURE_AUTH_SALT', 'hRqdzgE3xqnLwcsThE(L=Tr/TJ#5Xv8qV5-\`CDT<4@bOpX$*c)y?Ho=wvW8yv=<Y1uu6=Pm/64x0d^4*ID');
define('LOGGED_IN_SALT',   '8P?P#>>b~vsQy)eF~\`8=Z->$W@^ypGd7gOPiXIP)zM5)Vnb>eKFyQK@fnxyWMKo5J(RkEon');
define('NONCE_SALT',       'Jcw@rJF/Dg_2p-Z85VwiHz_OQC(<!(=IBkwrV1Wbk-|$po8c|U0U~)5L8Z');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
