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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'TKU4%I$*4g.`2n?MwG1HZ&as#J>YS>f$sw4!%(^;=0f/]k]n.6S3y7Q~H4s.*.u#' );
define( 'SECURE_AUTH_KEY',  'g3]G$G-5?MPI;2zm+#{k]pwtgC,;A4!;j_{Qd:4G~oBQ-PzCIBl+H8mA+Uyb(+(*' );
define( 'LOGGED_IN_KEY',    'ij[SEg|1aea3~3:2X.m8LN17MCQ}m6mnnjg>PF5Vwl>_gS.So4:}&*(eSmI,LmEQ' );
define( 'NONCE_KEY',        'Hp!H8VM@Ji]AjE]gXD&{f<)Yn$>)BuL%o.HQ6FMa0(hLx=i|Q?d<*Ib:$4qd!:KW' );
define( 'AUTH_SALT',        '~:*wFZr?Ag(Dsca`Q5iBErB+D1$`WifOe+1-.b3Xrf(k,/xC1-$%LE{QJlId;Kz9' );
define( 'SECURE_AUTH_SALT', '3A$V0D/s)pK7VXzvgja3sYgnX|oN=6lE9&/hUlA//=fZ$J]~89bsx*57{Rc+rfk~' );
define( 'LOGGED_IN_SALT',   '&Nc89{!p1c6fj$&Ztpsg35H8H_O0TsKlr-a}j)o+K-S<>T)DX{7gj sWXR}_[njl' );
define( 'NONCE_SALT',       'X9C T|mV2Ho!QKe,9((egBSMsM)%;>Y_/)M=EyH* JYNQNk%Vbaw2^mzp79%Ds-R' );

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
