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
define( 'DB_NAME', 'u737153814_nandanglobal' );

/** Database username */
define( 'DB_USER', 'u737153814_nandanglobal' );

/** Database password */
define( 'DB_PASSWORD', 'NandanGlobal123!@#' );

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
define( 'AUTH_KEY',         'r94YoQ0N<.FWox{~bPouF+H4w?QvA+i~ioI@Zc{JnHi#HI#,R9FeqAwvVP.p$e>N' );
define( 'SECURE_AUTH_KEY',  '0RztD/*gUHAX{Cg*_MQi7Xu{M<N3S~k&Tt`7Q)5+(7U(i-* QvZ33[APxn&O}{D>' );
define( 'LOGGED_IN_KEY',    '*F}qi-(]DsTinM0i8ZT8<G&6|{/o]gDehsYT]fT[FC*KmgH{;<Sono3J&a6BDXIg' );
define( 'NONCE_KEY',        '!V3,w-(+W&`iVE!g^bGFV}uUKG?50tPPB!/4`C{^R0y]>@!2^Qm|O-FUf.&-!LgM' );
define( 'AUTH_SALT',        'MscNnuG0QY9*Bi;nEdnk1X`S6N/i]hN:%p8V]?5;Dx1sNBBHorlD>CPf].Q|8_aA' );
define( 'SECURE_AUTH_SALT', 'FBrUWFvCTxL;eksoa(gS$*M ]N? f,ct; /O&#U}q9LyN]}IC@-Hg WU*5P?&@j~' );
define( 'LOGGED_IN_SALT',   'dr_2oE&,sY-PB%xjL+1X5%Rv#j*mD9l/p!-;uHb)Q,B2<S.1mQga HaBMuszHEzY' );
define( 'NONCE_SALT',       'KzpU<#]O2{eI?@*-KXXDgagY4A9@ps? 6jr?+H~`>OV]NBe_>W&Ukq:DZ[:$w8[#' );

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
