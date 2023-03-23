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
define( 'DB_NAME', 'necchiblog' );

/** Database username */
define( 'DB_USER', 'pepix' );

/** Database password */
define( 'DB_PASSWORD', '987234uyib-_!' );

/** Database hostname */
define( 'DB_HOST', 'v3-mysql' );

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
define( 'AUTH_KEY',         ' +!`#FdGV1^/5j[`t0R-H_^x&RS3z8]rkMh}J2{I)5l)Za<f:n6qR[bipSxG{Waw' );
define( 'SECURE_AUTH_KEY',  'bATzF?{rDzR)<M>1a=T%rWYRI{ub%3}Lv{lA;7ksS4KZPc`AM[]>=y$Pn(X&OLbJ' );
define( 'LOGGED_IN_KEY',    'vd+nz/~qO}I](AE`&>@ZdkCz:DPf9TqIH86oghU:L*%z!.}O}HU1C?JB=99%[X]C' );
define( 'NONCE_KEY',        'L86)wLsA7[dj!h//IO%Ynk=e y`*xrGbQ%KP01&y_i%w%:H62m|<2h@>d:gB%9L=' );
define( 'AUTH_SALT',        'gJUUP`bqEu=;+i>PY]^b8U4%2%!twq=tRpcaHQ~18R+?sD-}5[ib&v;K68F=?5]n' );
define( 'SECURE_AUTH_SALT', 'MTIQb})_=4]yy;fd8]`5^X/HhZkjOY`#CU`6hQj1! BYUcy2BXbsR_Ub9%Bs/I+,' );
define( 'LOGGED_IN_SALT',   '*weX_mf:Ph_snb@z3A;,2LeUD{6luzI5V2%6b+05)jba0v[VeVDUlM.p*xT-H2zc' );
define( 'NONCE_SALT',       'bZ1M>,ua#vhH95MQGqKWEIi0P]0&zlS4I9>tIF]ww*%gAK5,sK8t[m3c9~YzEkeJ' );

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
