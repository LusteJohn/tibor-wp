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
define( 'DB_NAME', 'porfolio_wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '#Wk-SBDjt?(HE6N3f^-3nI/oE@xUr]a.q;6[FS4h0P#S:8*cVnz 1%VSd;Ku;^yb' );
define( 'SECURE_AUTH_KEY',  'UCk$sNBP {cYRZ5mDjq.f:V;Q}3l)02pUCI@~=fAmKa/0 a`9#6z-^ wM^zb#(s>' );
define( 'LOGGED_IN_KEY',    '{d1If`83vA[`zrzpe^T{W.=LiJ1|$L4?TbC!|]stAuFWOa=Ax8hS`a?4]8kIO8*H' );
define( 'NONCE_KEY',        'yJ@/h`RA~poi3Q6/LPJ6#k>NG/-%0nw:Z;)P}Wlev_RzcXAU<vE2}0+l}:dY%IwA' );
define( 'AUTH_SALT',        'r,buF#raaTabZL|hx?`;Ka?T~>PBD}#gB$.zk!qwi9lkk@>Vv4%VV%eDIR;5>xek' );
define( 'SECURE_AUTH_SALT', '3F=?kDU~Xe[O+NrcT|N}1{kA*zwNP{#p,q$Gw)uyP(d&@)deI5Sv]?~q0_80;Ca@' );
define( 'LOGGED_IN_SALT',   '|`9NiM.vb)pEiQDkD|M.V0^e]rYx%%azRQiIPeoTZLFLD#ZG5}Fb!I>ySAQ?g{=T' );
define( 'NONCE_SALT',       'Ua&Pk_OKpqq0Kvf,,WV!8J=-$> @uW%E_U[u={8>Dg2 PQO9SRt`fT,uUg[B;+Cs' );

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
