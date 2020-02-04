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
define( 'DB_NAME', 'Word' );

/** MySQL database username */
define( 'DB_USER', 'Word' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sky14985' );

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
define( 'AUTH_KEY',         'lO)/.?q=~h^^7Y$}=hgY;`)uZh{H}-:b#g54GFNwWTx*7?=1wcsJUM|Kjwzi45/Q' );
define( 'SECURE_AUTH_KEY',  ' ZnKMGbf^~(d}YaS+p]S=X.CnFp@}])}x.a_6Siz5S4Sp_|i&6^lEbUgFE/}VkFA' );
define( 'LOGGED_IN_KEY',    'PoRvE|,FGQ042I)8:X%GvIg}Wb<bD-Oyn9eO+,(_4 <p+qjk$xa2Uw-N2xj#_)kj' );
define( 'NONCE_KEY',        'V@`j~J>I]()B6^FRc9k#5wEW?G893MQfD:gC9[IDD(e6{nyFQ.}|kQ:DW!CsGJ]*' );
define( 'AUTH_SALT',        '!0&G]/kn,fEnb}69f4f;!  V-cVnFXTmN4,0L`0n+&3SO|9`UR>$Y@o3 W.7HY/0' );
define( 'SECURE_AUTH_SALT', '-Rfz2Z1hultCqvd-ACS}(biW~*ObfEPiK44f@tgObl L%VU=.DpbCNMB5?.o7X3^' );
define( 'LOGGED_IN_SALT',   'gQq~?{_xr#:_9hl|q&IY0{NYc3%~$3k$K.pW3SFeJHyqoyA(jS:ZSZi#NO:Y5]s{' );
define( 'NONCE_SALT',       '@[+gLj^Wd.P{U>n Bu_|nfL#cB%iTznE1odd<5T4{~(;eFD!%>50tu7X8T^4A)v[' );

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
