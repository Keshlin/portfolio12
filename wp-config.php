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
define( 'DB_NAME', 'portfolio12' );

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
define( 'AUTH_KEY',         '^^2.6$[zTot0~(SpiYz[[A02=>^jOUefb8|~Zh,<P|S,-O 7zy6Lsrr:;&4Gj9$J' );
define( 'SECURE_AUTH_KEY',  'E9~S@~r^t?dNgP.1jV/c8j6JDOiUmD?1zD]iE8G~o-ZE9Er=%kQtOfClckg&qY>G' );
define( 'LOGGED_IN_KEY',    'T<<z-%bLiv8*ha,?$89QwRP;)SiH(2F@|`+{$w|TwUDD1Y>VM;?2m~28q+LeC5Fh' );
define( 'NONCE_KEY',        'Ka1XjLXeq.*OkPU%f)Q0yj>*|vL|o2fb[6;Jc=OOK)hrH>4}|=HwG.)wB?X_:Y+~' );
define( 'AUTH_SALT',        '@x1(0)4IulZq35r.U^|pN9S|>g8-i`tvRG?NnK= -O24y8GHx)%)UlymOH$Om!Vg' );
define( 'SECURE_AUTH_SALT', 'F[wjH?)=R{Wo>*hPYP+fsc9!%zkR=U7?dN$juISoFAoj`hc[DV!t<T$=[ny|d4q,' );
define( 'LOGGED_IN_SALT',   'QdvAbXE#7:,Z0/L[E;ZJ(B{{TuM)W;)so4:*f8XF0xU%g4UL>W<J]_r2& d>Hogg' );
define( 'NONCE_SALT',       'z4,|fwVvFnD%~ yu+brO=;yNqw1BU+f:e/dU#CIbl|]HN v|WJ1c.sVp+z!J(rvK' );

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
