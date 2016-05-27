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
define('DB_NAME', 'loopylogic');

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
define('AUTH_KEY',         'e#n64){y4#)k<obmR&n-ds1P^MZyHP1EVLpumJvO4N/aV%=`Rb_G0f_< hi/(p#x');
define('SECURE_AUTH_KEY',  '4GQJDWqFyCt`S6_+YD+f3XM7D8Bx5o%6~1O07?kg_5LMO@fI=du:Xd5#^@w[=O@e');
define('LOGGED_IN_KEY',    'n/X%=PHeA[uRjD;b6H=6>#9+X}V6?CNsYmd*c~jaItUmJrR9n`XN+.LR>Y7PYla=');
define('NONCE_KEY',        '5o;7VN/z$@C&3 .5jC(A[%S}PJ27G7:TqlHBi=%to1]AOOJc]Lo!`x+YQ>7XX%:v');
define('AUTH_SALT',        'onD91?DV.]Wd2LB@Pq^r#X/JE47_)4>e)%u.G}4uN+w1:7A0~_7As>kKVO_:6Bur');
define('SECURE_AUTH_SALT', 'Sjd.NN<J33m.w]%]?r5T9_e[Sr8}LG>TgODmj!JX`#!^]rAL-P:N0Y5>B,]T:N O');
define('LOGGED_IN_SALT',   'pR(Q?sC4jw(h{)h;k4VFFVf4ShT#q/ms7(<d?*e4LG=+Ud,-(#_NpwU&f:&3>Le+');
define('NONCE_SALT',       'Zx_}DFioF)PGuEZbsou=/=jF6;ob|40769N Z?Lx*u.MKa1Bor%o$<n@JfL~eu8O');

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
