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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'ozBMg$QW i<E^tU$DKMK)&P-.IY<ByUd uTWN9gn~$/kgB<Kx)lCg1k&4O>^?cqR' );
define( 'SECURE_AUTH_KEY',  '9-XYaZ}x-7%@S7kW!%Mjp1TI2B|`9<j{6GsQFbt]<*@$ZKhNx!nWE^Crw^u843G{' );
define( 'LOGGED_IN_KEY',    'gUy&|*zmIghtJ}<E`jL&`@8@ighA0*!f~B/p0rE1H~tQfWC 4N:@lFR(L5,z5n)^' );
define( 'NONCE_KEY',        'C|*f4RuK4x|3P-Do+SX*^s8G[;#AO_eHr=/{W7WQqP|vZHt;~cd!WH+ENt!}>yDd' );
define( 'AUTH_SALT',        '=c}0FAoA$LqrHJ#B5:``n<qM5d6{;tX.uT/Xz[MrJsasX;bYAfBU-6|_q;aLS Rt' );
define( 'SECURE_AUTH_SALT', '|f3&DB!hggF7c=o|Hs?&HcVR_=vmniAEKQ-sHxj_Aq0fV,5X1fr)#(&{XOM#Nj@U' );
define( 'LOGGED_IN_SALT',   '/)<3ma[a=)^VyK|:ViG!S*H[TcIdZ U4rQ|UObk%n:tj![*GWe4,Dg6-Ac(a3 G]' );
define( 'NONCE_SALT',       ',01](zQ.SNuTFXC(U~55v>Ccl/bWTPz.-Z^y[[D>W&1Td26O)]pw[#sL,X>`-9V~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
