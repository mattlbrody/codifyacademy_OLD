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
define('DB_NAME', 'sambrody_codifyblog');

/** MySQL database username */
define('DB_USER', 'sambrody_samb');

/** MySQL database password */
define('DB_PASSWORD', 'sandman798');

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
define('AUTH_KEY',         '//GHI84;/KA7RH4**Y.UNO[SM?eG-aLBy>8;%~e~j|V+g-~eC.>.(uD[2bsq}Bfl');
define('SECURE_AUTH_KEY',  ';Fb$kh&e 9?IUAaX887t`*<xK]]kN:X$]??5U le7?99kOkDF[;RWhNcgrH{|ux*');
define('LOGGED_IN_KEY',    '8jetq5MvA)P/`7dB^nn:+pqVX,ZwS4~.vobC0:(uL<kJ5F|_p!Qp[BN-5(W{-~)v');
define('NONCE_KEY',        '?;[tO,tvTfQmkSJ7zWvx+D[A~)`-?)qOI6$6ta1Ti{uuQo@I4P?=5IQv;W%#&T-|');
define('AUTH_SALT',        'r[[fPB2f|N-o8SD+gKjJ?L#5cKGx:)*7WD!^/~fL-10o[`a}c||C!/.qJ2BF;tPG');
define('SECURE_AUTH_SALT', '-ej2,<U;jk,u_S)O|-}N m?Blg-g+:*-hS%xb@^*jf~H0ExoAI,*>~HrcnKpgd>[');
define('LOGGED_IN_SALT',   '91%@Fny*p-7sz:U??^$zA(~7d0c]/0oJ@4^EZ*0)-2,bj/Ju|2CTzCw8+-/&6Qmq');
define('NONCE_SALT',       'Ak1GzhCK*ig~9[O|S1/hq<IC`2$DRN:}{nFNc&~Gp<D:!^rQ_|%SIiL-E(98.rF~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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