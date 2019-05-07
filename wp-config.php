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
define( 'DB_NAME', 'Gyadb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lmery1997' );

/** MySQL hostname */
define( 'DB_HOST', 'mdb:3306' );

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
define( 'AUTH_KEY',         '?vp9]#)Wqju}+l#b^Z(pTrOIT@Ns)m qTr4, 3Bsl,d}Qz>m3(x&oT1r*]X?B9BT' );
define( 'SECURE_AUTH_KEY',  '%*s_2!}^&:XNuPn8YccoUR=7v7%uHopViu a-~4M<`KN,DK:u{_y$jZb08Ryvp5K' );
define( 'LOGGED_IN_KEY',    'sYbg0,+X)p(|~QjJq3M#HM,e0v)U;jGJ(l8o-xDLj`[nX>Ti4}G;<H5u5L-EuXKe' );
define( 'NONCE_KEY',        'zBDY/B!uIK9zu9*8e;o:*PTvtM$pgy%pN<j[+B`Snf1#{S:]bh%9=YP6pCbqHDGz' );
define( 'AUTH_SALT',        '8?(rCA%|Mk$83uHi7Eko}JY[Gx20u.Upkn3}T0;`EaG2/]d>6X(~{9xq<Ddcr6`J' );
define( 'SECURE_AUTH_SALT', 'qA,<j .$dN7Tm%}G[?{&!EBn>O$b~.F(vH,wx4.aj.~hsr]ZzcV w<>L[&PdpQNY' );
define( 'LOGGED_IN_SALT',   'p`}u5P2uA?RDy;564>@oY[5*[}cRck.W3(A_D3;nERITf4/K8A<_Jd#T#9Ekf0Y8' );
define( 'NONCE_SALT',       'Yv;VRDW9=?%+-f/(Y@!#h;i5R:lR3As-[!@ws)M<?N_16[9+u~cC Tg{|;@tqY5b' );

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
