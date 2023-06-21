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
define( 'DB_NAME', 'db_name_here' );

/** Database username */
define( 'DB_USER', 'db_user_here' );

/** Database password */
define( 'DB_PASSWORD', 'db_pass_here' );

/** Database hostname */
define( 'DB_HOST', 'port' );

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
define('AUTH_KEY',         'H5VO~B!S82D[Ki+z7?8M6E7~S/Ye(J9W7wCCuKC+wjn]$*gj}V6kf`bb/=wkg9wU');
define('SECURE_AUTH_KEY',  'Zyc?oDEp`O@fUK&+pP-zxx4+gH<z,_456IqP#nO4JtyxeKxTGNRDf)9^(_r:O]k!');
define('LOGGED_IN_KEY',    '+Kh<deNfPO|<@tEr,IKp)(6sXkJT/!AF!Qv*ua bjNN?8fYBUKo*FOkHWB;k)Vvq');
define('NONCE_KEY',        ']6^Cs?%8ns_]tosP0kX|VNk3`dXp4,ZX=Y NID !jX0.vUOJFa@Ad,d*CJjQ3+^5');
define('AUTH_SALT',        'i+:=<P;-3<^{-- ---A-0H! u-5Apkz-hY]9:3:0gXIAt *ysg0IB-(*l>45|7rD');
define('SECURE_AUTH_SALT', 'cS1kT@WO8-Q)8)SZx-!gs14vg-`n&9*;s1Zq.ZYm&{Oo+n `W*^>ykwlg *@xS2@');
define('LOGGED_IN_SALT',   'Jes-UK+?v#y 4upFUQ$2@^<~vq{+n(_Z5jTmz,*shZ~M]F4R-aB,eU-%fHf. >P^');
define('NONCE_SALT',       't,R|Q*YW!c&A6o[GP<LsN`AW-94Nr*H_K]>*Inb#82-:2g?;%H|]`-!pZ7+bP[Si');

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
