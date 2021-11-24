<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'spdon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7HrY3sC3kXW+tjA_ACMtWXc4i,M[ctaD,eB0->GUb/ ;Q)`sp/_7n_[e?NoMNHE@' );
define( 'SECURE_AUTH_KEY',  '6]p.:b(44o2tQ.=jcvhp_j<^6=^FvP;GDvz7H]ek+b$5 Hys%5bj<Px~E GS!*~L' );
define( 'LOGGED_IN_KEY',    '<^K*s|gRfjq41zh@8?A>-c?vbZrp}q7QsHG[VkN`LSa{umI_b/i!B$/Ho_Y|_v)W' );
define( 'NONCE_KEY',        '})xQ1Vy5Zpt{2YV|t7FrPekno8yCM#(c5SdadX%`KHFB8:QR/XcFH AQe3_3W3r^' );
define( 'AUTH_SALT',        'NunlLl3Wwd}6Nz-+L5OzHn4T8q{-y2 t3@h13vks$#K<fFW}dBT8n2 v]8$X*Zc#' );
define( 'SECURE_AUTH_SALT', ']Z8,yHK{wf:Vv?(Pu_0s*kX!g`8zuWS$EI:z2; Q??7/=.X%?=XaNI7.4-TXAu.Y' );
define( 'LOGGED_IN_SALT',   'H0b0 <oa(pwOa(0zcyYYPhn`{sjJN:.CumxL,U7n_2|Ry<R8r&b<Jsd D^Xi7cs`' );
define( 'NONCE_SALT',       '#*r:a3 [, 9;]l`a`#<oH-_1)v?Vj,+?{Z7!G-tuL>^aAAwL/&vV(I&|:[=o8Y.?' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
