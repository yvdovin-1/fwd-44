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
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'yvdovin' );

/** Database password */
define( 'DB_PASSWORD', 'CalCasto32123!!?' );

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
define( 'AUTH_KEY',         'IAOJ,(OU,G25)q}z5}<*Z@Y61a]B|QS8Y3IYHMy8Pv|D/`JqVZ(.}S-U{A~@5GbS' );
define( 'SECURE_AUTH_KEY',  'o^`Zd>Cacegj^l=C #ToW :o5XyTQ`**^Q9:24XP@NGO,U1`eVE*h`d]{K~ JZky' );
define( 'LOGGED_IN_KEY',    '^:{6+6Tf,tC*=C+?@7E,;kyioE[`F${sCJ!jxVYsyv6cpNZ$:AF%7&[zYAp,@iHK' );
define( 'NONCE_KEY',        'qyUuJk!:j<,qCtWjC]fOI.Qz^:zzE3;5^*0`Ww<LJ/uAP<Z7Es?l3LMYL%x(d03y' );
define( 'AUTH_SALT',        ']%}?y`_n3QO@OV=E04eKi!YV:AV{[tMY&=s4?1nnpS7r_lWLVc_Xhc,nojvm>E^-' );
define( 'SECURE_AUTH_SALT', 'Zp#i#>,i-$@9K@|Wr9YqC*^6PpjE3A5eAaU:cY7Ct#FNWLfp/xFBLjPowrN]e5D?' );
define( 'LOGGED_IN_SALT',   'ZXIko? `<fwu>Kzng Ltp>M`D-!y/]y$KIYj:g`hpZ!fw{!KbktF#Ie0DFng4&^E' );
define( 'NONCE_SALT',       'y0sv5ge`9}G~?AL/_GfC}K}k5F)~*ezhxSPHIaZ4*~%w1!/jYCyeJ}WIem0J*S6|' );

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
