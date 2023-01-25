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
define( 'DB_NAME', 'flaviubenta.db' );

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
define( 'AUTH_KEY',         '[E2(LO_@dr_;XGEE=q|DJ7w6p`f-L(K^@#ay!c05Y4@*15sC(7L ,gM)j.s&$Eo#' );
define( 'SECURE_AUTH_KEY',  'v1F&a5%Q@0=S=Qwv~7>)zJXT6v:o)  $J+llB1My2Q#io@}0Tq7DvR=6g$2lZT{4' );
define( 'LOGGED_IN_KEY',    'D;}eINA6nW3vdPi$b(02<{3N3Ael||yfVW6!YEr+~M?H|axTdfLD0n;pz;|g)c$7' );
define( 'NONCE_KEY',        'JeAJT=-~qS@qNyMD*i_5=:5LBp{NF4u:= F:ZA2?[4Z.x l*#^Fx94Zf@ItpiX0t' );
define( 'AUTH_SALT',        '$Oo}sHi/oCoS22Azhur]:`ctqIx+;_()(N82s:?7vJ^%[497:4tlV|T+ZtaOW0;6' );
define( 'SECURE_AUTH_SALT', 'lf6FB[gEtOe+231^.cf{=()-<=V,hmF9y^b 5L5rg,$[ZYYrv1(5_a5id~N|v GS' );
define( 'LOGGED_IN_SALT',   'A c/P$}_)V>tl1~8Ds0xm.yLBM.j}Xr@JMdIDGfk)ZzkJr7KS_)NM8 7UNV9w;-2' );
define( 'NONCE_SALT',       '9sB[,HXBO{i=0LeMcu!iLNx &4z%ZCw{zfZwMN@+aN2UBEp35eq^_mitu/= 4f$Z' );

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
