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
define( 'DB_NAME', 'stinebredtoft_dk' );

/** MySQL database username */
define( 'DB_USER', 'stinebredtoft_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yzF5zELtfEe243ywDUT56VFD' );

/** MySQL hostname */
define( 'DB_HOST', 'stinebredtoft.dk.mysql' );

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
define( 'AUTH_KEY',         'firPRaN1hjX8-Br$Tt{uzHo;2Wi@6K.erq6~4}0Kvn0gmuM4cJuIpbVt.<JN[Sbc' );
define( 'SECURE_AUTH_KEY',  'XVrJ,Y<v^%Uc99>Vs%M/] :f$iRA*VvtY|&TgsQ4LKQ5;`8:q[-?ynHCZ=!juCdv' );
define( 'LOGGED_IN_KEY',    'i7+T_iT*z7`T/64V80R0Uq)7Fj(?H7heU.il]Y[MFdw{HgtY:iSLVy~}oa&nxzqL' );
define( 'NONCE_KEY',        'gM0*F GG)Kv{=*gT!~81KTpTe23w9IK{0ul>k {iVI4YfUC!4R65|!hvtY?sm.K4' );
define( 'AUTH_SALT',        '}*XG|O({@=.W^GZXYt0+O(NNh{fh/36rCW>.>K/- .2B#;CY=@_N|E0j{E%)fr=#' );
define( 'SECURE_AUTH_SALT', '/iu*x8&R-7H(s;+j9yoqS<+z]TdG=q|TSY+omw<(fx4)UT|^!qeAIOfAkOg2jHrX' );
define( 'LOGGED_IN_SALT',   'tuTfX.r=rxZd_{VrGd5o;f!N300W1cr `O(o%x)Kvv&tXGbq,I~Ahv`S~{Fn~~(`' );
define( 'NONCE_SALT',       '?1&{t1{d5H;HYyd >[)q7XrkejRo2unM:]*XV=~#])q}_M)wav(l&Yy`[6HgcoJ|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio';

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
