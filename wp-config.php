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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fun' );

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
define( 'AUTH_KEY',         'pL|cdv84oXLyH;2_/+-YD6>qkN>8tb7!~P]44,?Q{~aW@Ui2>3wRUkBR?rglyFV/' );
define( 'SECURE_AUTH_KEY',  '4o?;Ly7Zig5vg1}(}p3.g`M&}E{-M6A%`4<16D2m2(L/JwgJ6X]GE:ABh?:u3L5K' );
define( 'LOGGED_IN_KEY',    '>Lno?*T/Q05(1vSu_kRgfe%|xjmKryZ|.tY1v%yE0f7oAMtVJ*:i:tX|VBD_EpsR' );
define( 'NONCE_KEY',        '9L|MqE{y)HI}UPX#|P-sS2qG@@_GIztHXX2T1o0<hGN[gL<U$Nu:$YD-o`dy%Q(N' );
define( 'AUTH_SALT',        'E>l+2:[GBn1ZQ1::4#OQ~<k{QEu$%<NZVJ0Yie#+Bw%I}~-!p+Y FX4W hw?FL<%' );
define( 'SECURE_AUTH_SALT', '->ZW8Uu3uU1+9_8*ee}8-o2Q <Lkee{WJ|:q*9!]h5<zXC7xw!(uX9k)|fKx(Byl' );
define( 'LOGGED_IN_SALT',   'mYTa}oJks&kCaOvTj6VVOlsG@g9yH$5p2lNUS,f%DkjRJl/y#ktN_->Vh%[/?8l$' );
define( 'NONCE_SALT',       '7Jz FMH. >@9jQsx0`pJO3*3qRmb7kl_~PBBT,*C2:9jUE~o[)8VzXn`k8nL,pu}' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
