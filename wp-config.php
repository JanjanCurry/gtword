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
define( 'DB_NAME', 'gt_wordpress' );

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
define( 'AUTH_KEY',         ':KQ&GVzS)^63s[=*Z%bYjC@iEb8=hOi/LctQ*2{My1BZ_hSAJMGXIdNhrcprrS}w' );
define( 'SECURE_AUTH_KEY',  'xTdK!l2P&Nzrw_ti(e2zE;L0XaHz+ZQ*cfWY4PLtmr`=tGt{4~<I<uf;l#jQoT0#' );
define( 'LOGGED_IN_KEY',    'E-Yku<C#P{*_ypb-$3RyXGz<taEccLFx4@#=>86vxEABTd+>..:d%]Z7_a~U;xEy' );
define( 'NONCE_KEY',        'w>3hN@L9! <?K_GnKu#ebm15PXg]|Xh@-I$,jss|V9s322T~OM[d#g^^7bvhsf0n' );
define( 'AUTH_SALT',        '}V/bC4nSD}rriyoJLW@2K_4aeH,%LfA;^{3u-kh~!:?AgXhf5<*6K*{]qEJ3ZL=D' );
define( 'SECURE_AUTH_SALT', 'Zc PBsF!l9R7<Bs5(MJhC4/T+AJJdQTZQajkD=C^-~3<:?714k|ti) enBS7(ho=' );
define( 'LOGGED_IN_SALT',   'xbPH.96 >k.2#E7>7{a}dVrs)1j?&^@A!+oY02ooY;XEtGL(=@~K#w?Roz[#)enO' );
define( 'NONCE_SALT',       'F]PzOyaCVn>[E|b5C(K7Hv4]B0a~=7Y8R;{7Cqe+9s1@!n7N9CIx1Am5Q1.+-APn' );

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
