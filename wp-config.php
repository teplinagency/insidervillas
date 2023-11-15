<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'rindan01_villas' );

/** MySQL database username */
define( 'DB_USER', 'rindan01_wp_kuqu5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N2O!h%v#gDjjL7u7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'gW2t;_660k%-#7-iC64HgfQ-[Z[y9Q#2u|Wq649E@w0tL712xR4%0j/()+DsUmGr');
define('SECURE_AUTH_KEY', '[soP6gR7/26%-4g9PHAX5R:5p&6I5#JuxZZ_skP%g#kf61d@4(;)@2y!7mC3e*y~');
define('LOGGED_IN_KEY', 'i/iMfUEU3:zi3oX9@_|(/jaRNb(*J%XEe)Yug5t:14D]NAz3]LP3u2#-75L~5W*I');
define('NONCE_KEY', '6|!!gg_h|!|U:9+_+nF7f)rD@))10#239_V]84(2zaWj44_h[7aM7t|KtcSo1/t2');
define('AUTH_SALT', '&3_elT6b966HhPw7N|s/0%1*/;l7[A@;5nD~5%4]lDB24qU+d:7Z]6YeSO9M_0;%');
define('SECURE_AUTH_SALT', 'hWn3!_Mt-|pxx-2yso6&!&4dR627@4P[vsrRC_@|7M5-Vg:@8gOAQp3+743oW79i');
define('LOGGED_IN_SALT', 'R]jN5RZu3NsN+J!*39~6]_-r56N6On@aHM72sYPnOFl1W]/1TlO7y/MF5pF4en-;');
define('NONCE_SALT', 'Waq(3[ODQ_p)0nF2tdJo:J2;7(6a2j7Vj]Y:_Djjn:_gdRP2203%0i4b|z&2!Ty8');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vil_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
