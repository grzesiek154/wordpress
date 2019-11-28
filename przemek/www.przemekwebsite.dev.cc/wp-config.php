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
define( 'DB_NAME', 'przemekwDBqemsh' );

/** MySQL database username */
define( 'DB_USER', 'przemekwDBqemsh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u7I4FIXLOc' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'TT{^3rX6.XM$qA{~l9]eO_tO9K~pD:hS+mA]eP.qL5pa;*P9J4o-:8[CN>zN8sc}@' );
define( 'SECURE_AUTH_KEY',  'znB}cMv!o8>cJV|sN4Fvg0@>cJmW<2.TAqamD]eLW#xH;bmT.uEP6qX;A{bIyqI~' );
define( 'LOGGED_IN_KEY',    '7;*P6q+m6.aLW<tH;Aqa.q$Q7nT^XEyiuE{bMXD]eKW#xH;9-h1_SdO~l;*]aH+i' );
define( 'NONCE_KEY',        'dwRcN@o8|0kR7.XjT,qB{7yf$QbIyj}7,YFzfrB>jQb{$M3FyfmS#2*P9p+mD]eL' );
define( 'AUTH_SALT',        'nF0gN>v^UBrc}7,;+LXHxe;*]mS_pDP6mW*{yM2iuf$TeP*m6<2iP9|1hS_pDO5w' );
define( 'SECURE_AUTH_SALT', 'aO+m6H;iP*p+SDtal9#WDP8|VCw!sC[gRc}zN4Fwg[w_VCsZ:9|dK~[-K1h,r$M3B' );
define( 'LOGGED_IN_SALT',   'aKW#t6H;eLX<tEL2p+i2*#WDP*itZGw~k4G:ZKR[w@R4GwZk4!KSCp-h1~#WDO|o-' );
define( 'NONCE_SALT',       'yjuE{iub{y*P6Iufm$,YBr$j3B>fMX,q$M3BrXDP2ita]2*P6H~htD]aiO~]x6<;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
