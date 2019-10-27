<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MiSitio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l+ak|$.45<zl&KO_<}*Z[WIkM}SVR13-iKMMqh]+Ple-JD~?_GbN%2>^G|x*+/9;' );
define( 'SECURE_AUTH_KEY',  'pOCX:Z?-_^s^+U@q7$yY:/ew+$3WA:oQd(_1Zhs}Bzer0~3w,u>q9[+^we@;z{g4' );
define( 'LOGGED_IN_KEY',    'gqNW@n?e]$9>_DF,OnJ*CC.EP>ufyFVtet%mlF8Nyijf=|{4L:Wl6>Lw%vGT=av3' );
define( 'NONCE_KEY',        '~kQ&c?AWev}uH]:(tObzW3tiHxQ,eqNO{]61s|K<oxh/;ZUBz<:.b$Bpw%YJ*a)P' );
define( 'AUTH_SALT',        'sJtEDV)i=9O}wnxjt_=8Unj^[`0x<mZ7uGu[622.4S;H^zOyc?f29Oq^eL.bF*&t' );
define( 'SECURE_AUTH_SALT', 'saFqE$$?l3Y)U1h9S1.Q  +i7//@E;Wd(N}%ooDd<j1A,LBN|_u_/(o ]#x_:TIT' );
define( 'LOGGED_IN_SALT',   'sfy1:ag($XX&IrAsdKtMiOx<qjj)1NE*N)RaXMz]8IC^&2t56 U:8@MYT( f=p@_' );
define( 'NONCE_SALT',       '{^RXD0U%#*oBQ0HlWa*?7Y/> ZSkaMzk{~j7nl;@;a{e0|tZfiQ=sL*dA0r$(%PP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
