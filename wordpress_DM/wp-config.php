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
define('DB_NAME', 'wordpress_DM');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?=tM|z{J=z.lCD/+-%g(rFwg4+ezG72fYlXw=ZK&t%H~idb^%52$WDHe;,:{9Z>K');
define('SECURE_AUTH_KEY',  '~@iTxvAyL^zd@lu.TYT/_xzK-eq91dZC0370v[X6FJhN*M7d]tG:Ax].Z-zIyZ|s');
define('LOGGED_IN_KEY',    '0c_cx9y^x$Il)F4/;9iX7Qc`sGdf]8(o_dfN6w0TL3Mprl,)Cn+(z}*?? (4D0tO');
define('NONCE_KEY',        ')xQC<)iFW10B?pC>!u|PM4:otc[1RxhseSu=0A*M2kM=]+mrb=]gga1(H*h=<M{q');
define('AUTH_SALT',        'C~-s|)KA(oa5Z4eVC3qI-UEgG-lEVeseYN}!gmI01dy)eQ_dNOS/Q4d1)yTK-Dpf');
define('SECURE_AUTH_SALT', '=Jh_W+6Ma;{:+V2Hcd{+nY/l}d+PAc:2m(o%gu~_a;x[8mj ZD1U7kH#b)g$zW^%');
define('LOGGED_IN_SALT',   'zTBUn=VN`9Se|FG+k?s/y<!B|!/0[70b<mB8-F@/|<4R8mt0pL^TNlrRwt!<UfcI');
define('NONCE_SALT',       '?;+[PB_dMF55CV|hw8R2-0x.e}r:IQoR!Q.*->zKU+5=&m[_4)x:yj+}1WxW`+?F');

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
