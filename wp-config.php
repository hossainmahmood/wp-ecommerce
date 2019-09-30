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
define( 'DB_NAME', 'wp-ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'wp-ecommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp-ecommerce' );

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
define( 'AUTH_KEY',         '[Dqx|U`_<eCT(=VLG/dG^o6/h33xUJ#K3pG~)s-xN*,10.H8,^{E(vwnk]#{g0G>' );
define( 'SECURE_AUTH_KEY',  'dm]L~u3L~GmcGmY^&V@a@nSyC[cVRb{QiTw%V0R,)2o+`y)Vt/s[4 >]+8VYw.qC' );
define( 'LOGGED_IN_KEY',    '_|F*A/IReZ4Uo^kNzF[z~F*+6#Ek8{iJJAPa=O2:C+ea;~#%rvd}a=:V= 3$k9jc' );
define( 'NONCE_KEY',        'T:e3HPE%T3WO=PeQNw~|b)lB3:^i?{UEii BtQz8AkQ;^hs&Mz 3.KK=g)Q{Vy=5' );
define( 'AUTH_SALT',        '`nk<4BeOMQ|g}%`b50rAjXg*<at>7UkHg13t~our@jk,l(O3n6*=vQcw(^p2xvnc' );
define( 'SECURE_AUTH_SALT', 'W;1VkzHl?Y,<D1epWE%d?q=6!>:P;]tA/lH?];@b -o?FI]NjI$dcQL]YBj0n@}(' );
define( 'LOGGED_IN_SALT',   'E{Kdpt$|k#<eur|Ti4B$g0Ba%-Vlvtt@tOanzWCCaFBIvlh>A1{*:I|Ez1_<GYE6' );
define( 'NONCE_SALT',       '<mBgm8%z= ;d}q{a7]@RGio%Jh8&f|`OP8L8@*0Qv(_$N8`&M5/qd|i5OLqrkm.Y' );

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
define('FS_METHOD','direct');

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
