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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hammerautospares' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'lEcs ni;T0t4(V7,AsGV^^D8(#e|QXeuL;HgWvjD wV3/|=@@)Ho[:^}n1!3k#z&' );
define( 'SECURE_AUTH_KEY',  '[ude:3|NBHux_}HCcU^s/wQjceJ-=fFB*O~ztPiWQdeTXGX<Q%5q~xSy6+3[r,uz' );
define( 'LOGGED_IN_KEY',    'vo`z=!A8.oULZsDMEe_CsqR$5elraOXU{oal34|;QLS$n5u#UHoNz796SRe:So!M' );
define( 'NONCE_KEY',        '*6n,V0^Ch{wac]&e??D|IG(F|Gxufkd_tN7aDh(^h0]l2AZ]6m~|@Hes _vyZac9' );
define( 'AUTH_SALT',        '2ZYX{.F/n/}GGGT}7JW!J^_?9~xt2%{X;?W^k/l,e?$ok+U1,b8|eKm,S-v5bdCb' );
define( 'SECURE_AUTH_SALT', 'd(zI6>S8!bs(XC-qkp|$pGyfKaQf~QBQ!Fe7.{pbXURS:A#kl[LDt{zSGvQ=;->p' );
define( 'LOGGED_IN_SALT',   'j8415J@f0wI2MP~^IEr[%)*$XcdIQx_#/?PYTwW5o&8;D._7e=9zFDOv,OJ:+HLt' );
define( 'NONCE_SALT',       '.=9z;41R7TAS`` ik&4wl1n#6OA,+@$jE|h_M?GsZIEYy3?IqxdXz+Qh64BZpna!' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
