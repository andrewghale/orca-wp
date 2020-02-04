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
define( 'DB_NAME', 'onlyorcadb' );

/** MySQL database username */
define( 'DB_USER', 'orca_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'QKiL3MghWEV2ruNs' );

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
define( 'AUTH_KEY',         'nE[;x4IIz#=rFmK5Rt;)KR(OIJntE FRV)C^xRU1ih~B+yWO7kRtJ5bwn{AR*#f6' );
define( 'SECURE_AUTH_KEY',  'O$s`O -)Grz({Ft4g90-hy](lYJR/B?;ZA>mY1cw9q:%NOft({yjC]Y 5Oy:>-@Y' );
define( 'LOGGED_IN_KEY',    'zA,-=C(rx!m$E^FtG%y_PPtHXt]A9k6r?Zndwn,;3uH{$li76eWWN2z%s|aXEvA#' );
define( 'NONCE_KEY',        'z,2,kGFZe4;:IE~!x0vao-flE;}I^C#<a5C2Z4qsp=-%GY.yHtk;1+jFYAi*5Y<n' );
define( 'AUTH_SALT',        ':<c?Dli|Xr;B y%/6fB8|Owz6[G@h*;Quxu4[>)zB6_=!]n@=P{:,5~x_4cRRh/{' );
define( 'SECURE_AUTH_SALT', 'ZY)ay7{c%6Sj$*vtDz8xkE}FVm#baBc9=Je${&s>p+=43]Ci`k?S6Z_7OkN{Z|,R' );
define( 'LOGGED_IN_SALT',   'Ss.G<~|nMbD:3G$yE{T-V8 4z+~s{|YJRRWk+xx(`o-(+$gq1mFv1):J[8s{:&aM' );
define( 'NONCE_SALT',       'yj!{@Caz*ke.flE]* ~yw$UktZD|Uwrkg/2,A{6bMz+n,Iu3C47L_(9q:L%a_ghc' );

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
