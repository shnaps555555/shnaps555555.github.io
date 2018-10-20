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
define('DB_NAME', 'shpilka');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y%8P}<{O&#$pHouQ0ddCbhk[h~NRv{%o#{3BJEFWJN^[h[&,Crn|{S:ftNzalWr5');
define('SECURE_AUTH_KEY',  'D3u_S&E%*{DK>Z`gf*Lly;&~:yb@<=xG?=EGLr$cZ8s0=C? # zF@SF$dgRrC}7O');
define('LOGGED_IN_KEY',    'eRx<4v_B0@+!bFmNnh- Gt|?J`;eo//EVqe+dK=Fx4S:bTw_N/GfaKb)/:qsg#g1');
define('NONCE_KEY',        'W(91({2Lrz8:PM,oAj$(*2(@{|H4h=Y[70]WI+9ZI~AiO],+*c:u}CF#G $R+Np-');
define('AUTH_SALT',        's+X}hQhtuM-@0vZ[j(;@*n1S1$y#=SOQVVj^1U>6!E}s4PLmdc,3@3XS6{5]{@Dd');
define('SECURE_AUTH_SALT', '+U9~?eNmz+4o-Y$;`CBz^M}PNz[]:~&cXHaI#CH<dB[>Qa}I*a%fi6Yc^C1pY=/X');
define('LOGGED_IN_SALT',   ')3^/2R,_07Y8Xl$T2WI>dT,l $vj;6~B-:lM($&y]H8h%B/l~$l,YG3tF:_u?+yx');
define('NONCE_SALT',       '*B+YJY3ghF0<,j.ad8d%zXsowt[W8i:}h%?.@y5dY1pl{Qqvua|%*G[-0,30  hm');

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
