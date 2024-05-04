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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'secure' );

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
define( 'AUTH_KEY',         'K}f&<p>N+23W}g+JjxD8ha[c#K$SH>`3j>O3>~e_V9ZcSdEi/xa)+$6OL!+m.wli' );
define( 'SECURE_AUTH_KEY',  '/-tR*4Y_D3W97aJ|^|8,RWqH=G~G6#vN)L&QS[O>O=U+ws*K#(t`UabGst)BGWZ1' );
define( 'LOGGED_IN_KEY',    '&$e~*k0vv(54oK 1-EOtsQsJ3fG>_CnlJDKekZ_WU&qI^a[2oTuXRJ8)SA/S$0{m' );
define( 'NONCE_KEY',        '-AU>)`?*CNo1g~@~xz!5mWIdCo/9!Ww8TV]lo`*l{yW&$ [iwQr$HZ2AfoDC.AH=' );
define( 'AUTH_SALT',        '}NF_CV_syX/vipU9+.DR:`ik,oWeP$}n pMD?1Ok3aN=AG5KQ!7):: 6(68QNol~' );
define( 'SECURE_AUTH_SALT', 'qmieglsFKV1aV`yhoY/7;3=Wus:zpS$$<;OjRa=smrk9=r4/x93i!u7gQrYW3tcS' );
define( 'LOGGED_IN_SALT',   'PQ^yLeT=r@Pz1O<XkeOM7t)u R7}F7sX#@rE~RG>ajPf{JZrV+0;*lY&]ZG9pj*c' );
define( 'NONCE_SALT',       '903a_MPHF)RFq;.[3~}~q|6d((TT60mX$Bxc~][r :>jep?xf4eE=Tq[tB|rA<eM' );

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
