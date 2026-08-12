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
define( 'DB_NAME', 'vancouver' );

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
define('AUTH_KEY',         'Do=wgl.X!.&vxw-)%|uTQ=W6KC8R//<?^W9/6>7+x 00J6q!#~!=Rs`@DZ=pceyv');
define('SECURE_AUTH_KEY',  '6*A+d]>C}&bo~tl))u*r2^%baSD&+yhjP#wh,mw@U|^B-4Z;+yooiNBT7M0^TS66');
define('LOGGED_IN_KEY',    'aL]jX.1rm>b(@y6t&hP<Asq?F-spRT P(AvH#.l;&&61pU4<- LCC~trl)K=xdl>');
define('NONCE_KEY',        'd7Z|)+v^lQ$F:p@X*Q}*u,M/Obu <LcQ29!}Q{RTVtqsz{I>c;2U*yoo)S4M$ZzZ');
define('AUTH_SALT',        '}$|nj$htRqk(.<5{8R+1fSA_6x+Sm.&i~4YFP%DQgCZ=9wny!,35a!aoAI?d[>,W');
define('SECURE_AUTH_SALT', '?(#u@Kgjd?K*R,@+])@/@o-qAXO7FmIMv#Gw+^j3_^x}c1JxQm{8y9?L1>J3brct');
define('LOGGED_IN_SALT',   'Q0e_K;|9}uHr-r>JC^tAt5w}&}^p8E+)-nk%Lj>M8?n-psLI<C`ovHg|PL|rc>$I');
define('NONCE_SALT',       's|$! .?<~];Slo=kb{:yH]W(#/(Po P-[?LX;B|H;u7Y>b6-:|6mU`d$9w3u/51i');

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
