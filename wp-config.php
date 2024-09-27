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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         '-Rhg8{+kI_e`$,<0~+FqeN#K QVy5lQ2<+X8<g8@T%gl7 5?EG h=d^vEk(Q%u&b' );
define( 'SECURE_AUTH_KEY',  '?YMy/8rz4A >~n)uPWFCiiPdYpSi6zH8](muXT] ,(2,i@gkzlo(s!(K(]T6%}ar' );
define( 'LOGGED_IN_KEY',    '8uk[V9`LF4!#7N}IoKdx+Y]CNfsd,yBs[ul}^S_$MtpI6-4fRT7XQQY[9yn,`{v*' );
define( 'NONCE_KEY',        'f-Pd4B<9I<oy,Y#v3&aIiNvJ*PAY4F!+aCgoo!}sgj|CL*t)yi*3xx<Mz.%.rMcg' );
define( 'AUTH_SALT',        '*JuACBarLSgVerd[oT&[gmwmiI*~K>8rdy-}/80M-sK,?izC]u^EZG|EBS^#Xu6v' );
define( 'SECURE_AUTH_SALT', 'G>x?GBPOFs6h.@=iN){]H8PI&Ho}LSJ8Xj5.[[d5&#q^ SmN4~|j95by,z=y+=s,' );
define( 'LOGGED_IN_SALT',   '!Cao1$,5g&btC[/,IJ}P5/@6i8Vx1>zMt`6I4=X((mUa7SsE}3`jb~4LeQEep(HS' );
define( 'NONCE_SALT',       'Xb{SKDc$OB@*&/cngxz. y]12_3/=nTp>yuWwcEj4=#4P+P82ePCnK2%co:60OAV' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
