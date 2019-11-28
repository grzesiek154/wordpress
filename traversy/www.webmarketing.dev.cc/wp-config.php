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
define( 'DB_NAME', 'webmarkeDBlflci' );

/** MySQL database username */
define( 'DB_USER', 'webmarkeDBlflci' );

/** MySQL database password */
define( 'DB_PASSWORD', 'twoWZIOFz4' );

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
define( 'AUTH_KEY',         '}Vo@0FVo}BQfv>7Mcr,4JYn@_6Lap.2HWm*;EXi]9Oet#5Lap_2HWpq^ETj${AUj' );
define( 'SECURE_AUTH_KEY',  'Mfy{BUjy>7Qfv2IXm*ETjy{AQfu<>8Ncv|4JZs!0GZo}BQjv>7Ng,4Jcrs_1KZp' );
define( 'LOGGED_IN_KEY',    '>Jcr^0FY${Ajyy{BQfgz[8Rdw|4NZs!1GV@}BUkz>BNgv|8Jcdt#5Kap~;HWl+;Dh' );
define( 'NONCE_KEY',        's8Nco@>8JZkz|4GRgs!~;9Oap~]9Lal+#6HWm|5GWhs_1DSdt~:9Oapm+<6IXiy.3' );
define( 'AUTH_SALT',        '*2HSit.2DTe_:DOdp~]9Kal-#5HShtu*AMbq${7MXny<3IUx.2ETeu*;EPbq*{AL' );
define( 'SECURE_AUTH_SALT', '!86LWmx#2HTix.2EPeq*{Oap~]9Lal+#5HWix_2AQbq${AMXny>3IUjv2ETeu*A' );
define( 'LOGGED_IN_SALT',   'gz>8JYkz|41GSht_:DOap~]9LWlx8KZlw|5GVhs_:COdp~[]ALXmx<2ITiu.EPfq' );
define( 'NONCE_SALT',       ':GVz>4JVkv|0FRgs!}CNdal-]5HWhx_2DSet*;Ddo~[9Odp~[9Kal-#5HITeu*AP' );

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
