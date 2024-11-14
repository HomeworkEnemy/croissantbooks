<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'croissantbooks' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '[juXJatV5(M_*Jl~;-sz9UP a@.J=P?pA!6kLIMqtRsbepR(@<BEm}4DCcJ:FXH}' );
define( 'SECURE_AUTH_KEY',  '|-IVEmLsO9G533nr[.>Gr_3/AN{tOYv>~*EOZuIR`t prv(Q+nECNiTDFsH[2/^l' );
define( 'LOGGED_IN_KEY',    'Z%7msrz,fyP|+zp#NL~`rjnUsXgw<CU,NGFrIlt$wlyOH4+0;D)aI{#|3~AwV^7R' );
define( 'NONCE_KEY',        'IKZTiohs~o]}XgN6sj-CP}G7$3z!0?Hq&zhI+ uR;}Rk@H8e8l{X6m]+|)=>%D[W' );
define( 'AUTH_SALT',        'pjynW2i6*-{Sbtje$a9cRMBx[<r$-,|s7tB#ij]0cg:xV}j1?eo,(A$a8j/YZPpa' );
define( 'SECURE_AUTH_SALT', 'aJMIkB[g%Jv`ZG*J^7pBs]WJH+6iTa*sI*buL,j92*5!gq9T3Uy#2|T<EOV,_4!M' );
define( 'LOGGED_IN_SALT',   '].0mKDk;E)iXV>N;AwkmTXIrl);i|*9Q]}K?25R@v0`Ngg;{mf2.DhbI)&BJQzIA' );
define( 'NONCE_SALT',       '50.naW/P;5L|g&,`*@8:dqm F/iK;:X#ocJVT8q65)FLe7um<,@EV_6K4ee&QWX9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
