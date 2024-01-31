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
define( 'DB_NAME', 'wp01new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         ':&n/{e?+?D{}{A %-I(7bC34KLLpF}k?&G:ufz@9pg_]9mU=H-noqU(C-b1K|X0:' );
define( 'SECURE_AUTH_KEY',  '*$&gW(DM!q]d%9T:c7yyqDVnR!E41=c^_6f+Z[m;hL2*grocL/i)2;OOfp_&wFPp' );
define( 'LOGGED_IN_KEY',    'gjN0OSBW={4vsE7W@>t>:]0%v]sX>]`.DB1&npWNiTo|@qL(/F}Q1V*w+dfY!3iL' );
define( 'NONCE_KEY',        'R!DFQ4(KcRV(Y]`#3A*v<ayTR/b2IX%*O/-tlAiA~>T)O,/5`,.&91P;S]8:kkdd' );
define( 'AUTH_SALT',        '&,wrwc_bfqy{#rR_&kh5Js8sm1Y-ic{/b&ulA/FajUd>`xTpvV;1QOygvOHLr]JG' );
define( 'SECURE_AUTH_SALT', 'w)4`IL- d*|aK*hF+ W(C7Tzc4uW8&%0e/`p[eyoRP|A6I*R1EKmb<?i.$$2bgrh' );
define( 'LOGGED_IN_SALT',   '{!xNRfy?##T#Ap+)3j|C3AzgVb6*/[*A*7O,6`bH;ZxkLV$0wyH=j55L`Iv:@8``' );
define( 'NONCE_SALT',       'Zf#/AIy>htsSu?Ii/oITS?U,+M`Gxa:O~]i/.cC3yI|R$rob<Q,kp!.%Qf*KKIeE' );

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
