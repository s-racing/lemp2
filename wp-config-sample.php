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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simpledatabase' );

/** Database username */
define( 'DB_USER', 'simple_user' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{|_d8$s7y8hj7%+sSyr!5WHiqG@i+ps}HO30|yUGt&`X$6;z_9/`VM7 @A$-su`{');
define('SECURE_AUTH_KEY',  'TYsCUq!RB*p/Ln,&8j)Iknyl1W(2} un(O4#PRu:C**Q%M(K]Q+Mny*dj8cJ+c!f');
define('LOGGED_IN_KEY',    'l)z]M^^dF~!d2xrH} Rl?H`X_cNq0]x;e),|G 5^D:rZ#-at~2Kgy~wk+yrSd(DL');
define('NONCE_KEY',        '!aY;L;E`L)B4+ sxt4IaR./:Tdu*(G1D4]76_%3j$2u_l4{C*[?*B|Y_n=-fR|_+');
define('AUTH_SALT',        '`52CLDE{Tr&pOUMR8/Q-]:+6[hKXk;/|}zUpH0WY}]&8j|M9`1;B|h2.77xR?Y%{');
define('SECURE_AUTH_SALT', 'O?u3nLhC,vj`yNZ>}5c#M5X/5*lEQoS(dd[^ox*TJ,b9P:,*2~~,{(>|_-Qm^?;9');
define('LOGGED_IN_SALT',   '?B1kK#!ej!;rnD}ZjW7G3Np>6kI!s%_+&ufxK>l)#8sFw~,hMhyWxFpSLQo--SvC');
define('NONCE_SALT',       'n0Kdc0)Veo[Z;BX|J-Hpm9S47<2Z{Y~*_J5j8*n3Q[V.$ZsmXjQz q*/J]m4,F8@');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
