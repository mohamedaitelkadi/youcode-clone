<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         '6SWoGea.H]]frj]uNsbKW{W@`09zw*`sPO@G8LM$!1,b`iTd{0~85W/U`Y!uw3ef' );
define( 'SECURE_AUTH_KEY',  'X_#CD?rCt<6`2,B8#y:CY=$#DanV!weaB?*@cE{lfDp,j6n,96?@jn6L(BC1JCpV' );
define( 'LOGGED_IN_KEY',    'z[~/_CI+(O*6EUocwzU6YRsknUBQR>&ReN&T1XrtEe@(:Y%&_b,Uxcxn=qH5n<V?' );
define( 'NONCE_KEY',        '@d(tF^?5>R*&L1DTbIfcUkn>U7wTP&X~K9Rd}E%<m;u@9StO#6wfU-}K`;jqN~8-' );
define( 'AUTH_SALT',        'WrGFx$w}0IE_LU$j~gL:cJ]*(-2Y3&=?j#$v[q xxSTTcP3&/A#HzFpP[%9Wc4K+' );
define( 'SECURE_AUTH_SALT', 'eQx(X`<:Q?7^(9&|Zq/7Vwt$Zd.Btpfdl[_ikfQp[V%[TvlRCP};m%!Ry8n]&i4s' );
define( 'LOGGED_IN_SALT',   '!w5^8|}mfp#_PzUegRA@9X>oO6,,rh(pCGA-ZMK% >V|<u}g1#,jtVS-D:6z1nx8' );
define( 'NONCE_SALT',       'G_aM.IO![<VKXm>4Ziq3#UK6A^-1$EZ?5n()4/IT{s>wrl(,%/gBZuBw Yh@`ydA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
