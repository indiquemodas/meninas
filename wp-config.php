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
define( 'DB_NAME', 'meninas1' );

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
define( 'AUTH_KEY',         'QBuH2 QSOZjhw){/`?`wVkQ1( l~>):20#WA6a}`B?9*7vv*_+YvDWGTtpg1Z6&N' );
define( 'SECURE_AUTH_KEY',  'L{6A^TNy(f~o7s= 9zLM4m2^er,=a1v~qu`w<f&pbi]3}$~rpjq0oHkPuu1Pnva/' );
define( 'LOGGED_IN_KEY',    '-TSFWQ!1pj.]|h{Z|(Q%Mhro)=>LL7X#*JgkF7OUClwp?JVZd&S)x=zdne(|sEJX' );
define( 'NONCE_KEY',        '%)J-Sjr?9Ad9D#F59x.ISa_>7dMCBI6 /GWRrCq trKmM#`8=.Bl2Sg)hb6OO;f*' );
define( 'AUTH_SALT',        'zMz?0xJ-!t[n!W<Z}=>fSi#Ux]a-}[Zgyn5cVB2pOv%r(^-x/(L2 qM1pQXA}ZM~' );
define( 'SECURE_AUTH_SALT', '@OJ#= }l+m3IY_awua[e</&<# 1f?<=#>C2(wGZG6Fk^xGU X4I)$#c*,u#t`RK6' );
define( 'LOGGED_IN_SALT',   'ibjSmv_?(O[QT=`kv&x=P*PM5H)Bppc_41uN>MLc:F;ZK<NFz:jSQV`?dU U%9Ee' );
define( 'NONCE_SALT',       '3$:)7pHWdd-bQo8ye:bKE;r[AxPyp^4b)>Z:g&Mi$xoSI>Y=,phj8xmb3RBSQZu}' );

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
