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
define( 'AUTH_KEY',          '^#BnMy6U.kN}z!vs/TNdg9!/5`BM3L` #hqOA~R|%RFMe;Y7^6rf6+utnRQ+rwa6' );
define( 'SECURE_AUTH_KEY',   '8 Na|s+I4CD/zM.Zc|~uPf5EFraF)@@?IUn}/oJZ(;;rMQ*{NmY7O3UJ~zQ26)J}' );
define( 'LOGGED_IN_KEY',     'p5&`sZV.YU^fX|/n^L1KbxcR~+g$+PCtQ/AmR`&0pc)j+T*W>1r)Y=T5XLD}nx6l' );
define( 'NONCE_KEY',         'DV=2p14tA)BN#PU;,NE{zg-@S06r3$r6.hH-#.3[$LEF.el|$c?MfmITnvXO;(`$' );
define( 'AUTH_SALT',         'VmW(Nw%im}q {>k3CVLGP!_(<;.Q2_~0)Wdtg?@}q/{qrUb#qEBs{w (G5`yw1fv' );
define( 'SECURE_AUTH_SALT',  '4[ob6rmbSsHk.=m2uLkp~(,`}0Jb{G8#bA`7{J#xUZbk<bw>6}MwM-P}8TtCZ{IJ' );
define( 'LOGGED_IN_SALT',    '5BWL<5@YN<?I!MgRmF5I~:$mlQw4sjjEyHJo|TTn7AcS8NMnSY1mhfjuo#Jp>UY^' );
define( 'NONCE_SALT',        'tK9-fSC7`EvX>uEim!MoTFg-msJtow{DNJ,_% p*k/:g1w,M%-Z6Gla!|!>1(tmK' );
define( 'WP_CACHE_KEY_SALT', 'I[$g~PusuP$LM.=FH&tZAAyPQu5,,N,/;Tg.dH{E]XqUdwE4l ],SQO_O/sOyMv%' );


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
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_DISPLAY', true );
	define( 'WP_DEBUG_LOG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
