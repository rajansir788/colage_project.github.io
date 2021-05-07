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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wscubetech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lv,,cQ__P+MLVw+]ep+l31[,).{IP.P_VCXEpk=lL3Ic@rmI73]C:FM2e[Ep*% T' );
define( 'SECURE_AUTH_KEY',  'b>`?XxR4OGp#Ck#94Od<$|x/PBC2X$xe^?Mwzw8#qnaBSQHdXf{8Xt K5xYUW%Lb' );
define( 'LOGGED_IN_KEY',    '=9wD]+F.-|Kc4>< Y&dKr@VJm[v[Aa#.;0>)f6 0/p;p0]TY{/X!(MDBZC#nKv?I' );
define( 'NONCE_KEY',        'h/u~(bG>yf4a&dOJiYBb)6AjE.Fo.<o}.lZxU$0sWddXmFQJa^L~fAW:ix0xUVk~' );
define( 'AUTH_SALT',        '=R9/,e<{*@5z=0.3K1<RPnb!P%[3.7fBs)}.jhJX?>9$&$Z;j8Yl$C5xBjMeVB~L' );
define( 'SECURE_AUTH_SALT', '1O[4cmw{(0KN Y.w~)+SVR_$7ztkwkOf@XljI=66(/naJy&F|R6`%,6iZOi^sD=y' );
define( 'LOGGED_IN_SALT',   '+^2,i>]tCz!U0&hGXnWM47@p-]`iaA2|>H|sDT-*HpP}9Yuq^x+unY2 fi}}DNJK' );
define( 'NONCE_SALT',       '2gefY(R>I0#Etn brz~8Q,]AN}2SF$TSvO,BPF3BMLMVx~8Ie|-!R}XT2 UR%g_6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
