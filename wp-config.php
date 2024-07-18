<?php
define('WP_CACHE', true /* Modified by NitroPack */ );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u794768930_hB8Lt' );

/** Database username */
define( 'DB_USER', 'u794768930_dD5Ll' );

/** Database password */
define( 'DB_PASSWORD', 'oI8LDjpWep' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$vX`4WORLRH0/!BY9wrPaCE.YBu ]_nHknp<Ux2Xky7j|bB>Ven_SbLk7L/#wn<7' );
define( 'SECURE_AUTH_KEY',   'PRrj)FwTZC.9u{P}2Dg;w[a YiO#mof%DM$w?:SJI~KUMmSw<_:7h(W+x!hh, *1' );
define( 'LOGGED_IN_KEY',     '5rSv5n=-F4DsB0RDI&d($}7FTnE~#?V>93P>#x;X/@|$Y})J3u*swS.RzV~[?kS~' );
define( 'NONCE_KEY',         ']$}8671)5Lc$X{E<ofo-SUJE:fWqCWKxxG&x`B:Ccrfa6{f5XnWVSC?_/sabCIT:' );
define( 'AUTH_SALT',         'PGXL(1RrBYTZ_G,Sv7&b!--z^m6h{fdRYaa4/0Q`x8Sq*OG@?N~U.AbuJ,|WC~m2' );
define( 'SECURE_AUTH_SALT',  '$yye}3k+bbHxIC<Rdo!1<+GvNr?*UZrm2B=++_I_.Lt2X [4{Z:[e#b1c>u-LdGy' );
define( 'LOGGED_IN_SALT',    'cSj:<$8|N*SVwBV](ffXe;1K7Os!ZD|G-Zwg#A$ (i,Fx+e&aG{9S#)hH`rW]v7s' );
define( 'NONCE_SALT',        '?<]sLg9<;GoLZ*I_V_+y+s7@~EQhnNd@@_ZT(mly%Z2hpbs1uliJa?#!r LK{q,3' );
define( 'WP_CACHE_KEY_SALT', 'BhvW~IbZ!%}K$W70|Tq2rhn1W/UM2pD`+Qn|XmIitwg0/~(zz<j$;%`|:pI=DV.g' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
