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
define( 'AUTH_KEY',         'SoworIoawsyd7HHd@5_1uxgx^U!~ua_GZ,]NKMDB4aEYF/8|g]`5&},ylTf<:-.h' );
define( 'SECURE_AUTH_KEY',  'xp0@0Qdv:E^%`eJ<!Hb~fb[=g%32^*AE%spW(G?BQ+WKFYNn/w2n SHgXw`|W(Pa' );
define( 'LOGGED_IN_KEY',    '}a%o5O< MF,IJ.p|t(>n<+Py-J|b/LXbd47c:Q)k_{_. [y6g1Qw8p0j5ljfBQVp' );
define( 'NONCE_KEY',        'cus&}hA: L8c9dQFan+,f?/(Q]gE,`>q?8/9s-s>tFW<QQuO!I_bI%#J6fnP^++^' );
define( 'AUTH_SALT',        '8Px8EG{,/T:VriMI:kw KH;FC2!R$f}HTUhWaIS~MoOfm&3*TmRaxO:!7IM~P*@l' );
define( 'SECURE_AUTH_SALT', '}=d_[T!+c0]/FXlO/a@MSEsQ^YkkLuWi)Au(;l(yh}#{OU2m&D*,mbF kO;m0>Vn' );
define( 'LOGGED_IN_SALT',   'HKq2_kOto~b/hGq2dlfq]xsl|?J2i}#>&ZuH|eAN0a%`OCf:&_K/?[M7cH ]78a5' );
define( 'NONCE_SALT',       'wI2`)PPj4Lh+IZD@Mk)0iCb[D6/IJMjz&eOp$IMY4-(%/bkX2=QY@x^*<{Brk(JH' );

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
