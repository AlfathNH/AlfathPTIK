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
define( 'DB_NAME', 'Alfath_Ndut' );

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
define( 'AUTH_KEY',         'm{]-m q.f5@<-:6LF@CeURNMw?wrL/(.2~U[3m]P>jxiem3CX)ie~]Yk-kUCJD+#' );
define( 'SECURE_AUTH_KEY',  'rD+hTvE=o^aKU?a|p*3jtJZ_7igdL(&B<[Mst@<fazPb6Ujr;My8+jl8zL:{/b/p' );
define( 'LOGGED_IN_KEY',    'y_Z4iP80jF)3!ghY[EaXH2JuGjcKY%?D#:g~ej-`z?sZr-ZbqZ3b&PyCW@+^W7$2' );
define( 'NONCE_KEY',        '(k&aLBhW3QLM[::?9Yvlt]zRSMV`c|pRwNd ;1T?mnh_x:[O>CY,lz&&eLQjpWA7' );
define( 'AUTH_SALT',        'q)D*O_V*GmL$ %mak|k/X*f(?,FV7z_(EyPkR:)60;2Y+&479A^!dba/nbr*#HKr' );
define( 'SECURE_AUTH_SALT', ';LxTU~JV_:FCR|2.t^0Rkd3YwXFTxt|g;J(UawEowB6:TMn> IHUf; YzY)P4ay@' );
define( 'LOGGED_IN_SALT',   'N|MZO%lekw-XuYuO++xnO!Z<}]mJ +vXd<3dLpf&;NIWcHO)+e$~N1Z?%$uz2Rgt' );
define( 'NONCE_SALT',       'G8]~I6*O7f7&~&+^EP7V[AiHaPG%N2xw=cCzGe+>ra-P+ZHr;`{t^$y1#>l0fn5_' );

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
