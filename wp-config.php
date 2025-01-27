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
define( 'DB_NAME', 'ncd-local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^0}*&ig;ND*@/;(bi;qa;K5Hj58V;L}.{eiy8_vr^47Xw_l*C}}LYShGK*7~N_.?' );
define( 'SECURE_AUTH_KEY',  'nS^kbf`xVC&W)<q2APrVqf}(%,1$:.*X ?eL{4AMoi/dx<H(DR+gSLo)(gS.0{R}' );
define( 'LOGGED_IN_KEY',    ':gOo[9i`4AZoFH)Y3z2M6OCBpHU^gpiwpgm1n nC6r,AbR&Fuus9)_a2w_=]br,#' );
define( 'NONCE_KEY',        'dRn|go]rZM?t5RX(1OPeX]_:AedoiG0EogD3no27c@~jD&x!(C)w0Iwp+x7:amVz' );
define( 'AUTH_SALT',        'Jwt7&+<A>@y204 X9TCJ@y!mL-Bu(X{nc}V2QBG]eQygNj[`VkpWp ls-7/#ULG<' );
define( 'SECURE_AUTH_SALT', '6X;sMMX].]`5tWfwSJjCC5j4}h3lF#dL!M^oM>4lPXDe=#1O(3pLjI}9cJC=JYlI' );
define( 'LOGGED_IN_SALT',   '[CK1SIjm.#kaYNA9_lqy:ECW[V9IgL&PTB>`#j1OT$`Z{n[@,XZ@R^~/cpHi%j% ' );
define( 'NONCE_SALT',       'ZOMo#%B{Cq|(aR(a`4Oicb(!N`?[Zf>T426;s|)HJh_PssrvwI<Y`Yckib5RdG1N' );

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
