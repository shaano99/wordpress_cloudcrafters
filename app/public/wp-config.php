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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'M{0+1#&?U$$-42alHI?eUB}BEzW#&HQ[GHq]L,SE e{iQveejOz,&(R:SfY[Z[&m' );
define( 'SECURE_AUTH_KEY',   'a{f9:]`/bH/ethqP5[+myG){+<qabjQ4(k&j!}Q~i8LUU4uYXpQ@CK~+S9*z**fz' );
define( 'LOGGED_IN_KEY',     '-Nr FSr>oztW}5?%O6XQ=4Qm(&A~([Sc@9F)Kxs6;k+5E&f{DPVxN[FaX$NOPe8t' );
define( 'NONCE_KEY',         'u@!$%&JZd;=ML(;h7XUk+&Y>wa%XRLIMdoHdR{s,:Xjq1,pZ:^pcuQFPP{xamlQP' );
define( 'AUTH_SALT',         'zM^6&f:zxtH Qoi]cNwJ_SwvQ~A{QpD5`XU$&{N20Hzg.jHQ}V<cT:tg@>&<*1a.' );
define( 'SECURE_AUTH_SALT',  '[.,|%:xJqly8cj8dS0ex/GVZS?Ru*5cAvLUAsVj7of(3I:A#*S=]bFa=1*P-]YEh' );
define( 'LOGGED_IN_SALT',    'vY;hv*`V$YK|9v#B@C{nr>oKb>^Y(g%4&rEoe|qy)#9P]QOG]?Cn,3rvMSI#yx~-' );
define( 'NONCE_SALT',        'bp^T,{N6JQQT(j[;5(n>r ja5gSwX;d)wx 25&|4~6i5!Ly*[01=>$0pU37WtGeB' );
define( 'WP_CACHE_KEY_SALT', 'hOgKHsX*n#i;g6D$b%rj73ah^^4.gqq@rt*gj[+o(@z N1U%7sq:uKSWd?G}U^7 ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
