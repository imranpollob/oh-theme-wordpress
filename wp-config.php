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
define( 'DB_NAME', 'wppol' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'e2!-#5vPm_mf-zWJiVNHr0YojG8L!G!:4{{.|tr`}[d Rc41G&B!j!QF7d:DW[o_' );
define( 'SECURE_AUTH_KEY',  '6?)?z*)y!sl%/Wg$qM HxqH3kAxa3?(IZj9nkmbZM!r_l*&foBokc{j;8Y& u?M4' );
define( 'LOGGED_IN_KEY',    'tbu qL?q +B[M#Eb|8l{;$;28/c8(>1V+YVDwX~|i1j![}h9u +GZG:X)JP3gX~u' );
define( 'NONCE_KEY',        'pGc@R|9gfW{3)VU~>G2*72;xonTs+SA#*XgP*,T<4P0~1o&Vu%Q/axQ5eBXN)ril' );
define( 'AUTH_SALT',        'F2PU.!0ye?U3j;^gs(zHtp&3cdb4czkkx+,-)lU@@[$ Gi`Ya(tkww^9ODjvqlQa' );
define( 'SECURE_AUTH_SALT', 'ZioEd3QRO#GD=,$$^0l?Yw4+VLbPw4mjI%gJ(L.*tG{[?Xp9zN,=Sg_pqom!P7Q?' );
define( 'LOGGED_IN_SALT',   'E7#KZ;/|4sg#<sA,s5q5jv tRc +]Cmq9RD Y_nEatl0(PEH U.PAShCPr2d%RAW' );
define( 'NONCE_SALT',       'HfU`=tX5Em<W+$us1cSuoR72J`NONOF/?g9=[VW*Dm#Eoy5f$aUqUSYx:U2kmPpa' );

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
