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
define( 'AUTH_KEY',          'C]aB5b>TI1eRVvF):ah#<TR!;Y?=D6;D-0i8*?$Ya13w.cGD&]SAl.s:=*u|H(ZF' );
define( 'SECURE_AUTH_KEY',   'f$zM3y(t>Itc@:C`r:eyV4KKCAFZV1^_-;$#wKQ+.<}#Ulb>sop0,%1P.EBDhZgs' );
define( 'LOGGED_IN_KEY',     '4gT?8LXsOrk(et(hH%wO6]GH]8-nB|Y5#St{fx=][fD&W%q^76Gv]UGhkZq6-V~H' );
define( 'NONCE_KEY',         'QJT4%13Igm<n/uC6s/#~bp2v)]u/#J;_*IEG=f- ;HwZ5hGJ.W^&>RM!i~KQ-L)2' );
define( 'AUTH_SALT',         'SlY,HITeFaeK`=I~y#C7NdVPc|@5aMJzP*CNLd{xEp$&Pjo(JQxF_@bil{WnGZZ&' );
define( 'SECURE_AUTH_SALT',  'ZTef:LEa3>b@hx.dr5T9nR0ziWLlvK>3q[7IUD^o`aKE^z U%q{9hzxR&ak{J.!7' );
define( 'LOGGED_IN_SALT',    'u<^<,:fY@O=a:h&J4~Z.!?/(dspi5A,WZ9t+.Vm6-[|td eRJd~UuKAKT0$^7]*v' );
define( 'NONCE_SALT',        'Rf1JIcHZF^#oGduMjiAw&OR.YSb1cTrc&.+aEG34_ma^2^%%@hsmU Z$^xuVExAz' );
define( 'WP_CACHE_KEY_SALT', '<+S*{B`<3kj|PDVjU=mhg]~08nOs[[|-(n_?[fT}K&8_,GEUjHa`jh0@4Dt62^8J' );


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
