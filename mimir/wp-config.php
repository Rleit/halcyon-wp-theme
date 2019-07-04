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
define('DB_NAME', 'rleit');

/** MySQL database username */
define('DB_USER', 'rleit');

/** MySQL database password */
define('DB_PASSWORD', 'fdgtetr');

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
define('AUTH_KEY',         'PlL#Xl62.<YKVx=IGx^uQsa*k|v$a#A}D&;4GhQ)+3j(xH4bjSuPiNxnJ-_k n)J');
define('SECURE_AUTH_KEY',  'dA6u|Y-Jb8a0?A6`xwVE+R].v7&tiq,frv9)NQ$L6>qw|JY)gVB@*wEJKBf6/^o9');
define('LOGGED_IN_KEY',    '%h#`?Uz>7>|8Z*1|fk^7cA~M|!lMcc8HRu~vMfmez9vWcU9vCOR]LRt=gZ|1nhg^');
define('NONCE_KEY',        'yfV>Oe%IQ{B]EN}B~a^;@bsEB*)u_4_z_>F14XtAh;mw<Q_rHS{uoQjbm|YZPoKL');
define('AUTH_SALT',        'O4zjJ -dSXKPM?2+fd|8t<ylRE< L)b2` 0h]hNau>1X%erVH^{B82K5P$Htc>A-');
define('SECURE_AUTH_SALT', '2VL>j2.|86|$,Zs!iKhMwi98N|G^OY2nRMz1Qv,,j8@t6$*jVyBczVwp%k-o,k8]');
define('LOGGED_IN_SALT',   '6_Ai!EXC;C?)  2|J.BE}[ar;!K+Kxc/+>3H^iI44 v_9=o2`gnJ*8=@U<Y[ED&7');
define('NONCE_SALT',       'PhB~HohdDE9yb*J,<1}op-$UZ=w~X3@:WIrK{}L(9[:yLzp4K?gi$7GJ[RGGw@HO');

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
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
