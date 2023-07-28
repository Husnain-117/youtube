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
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         ':?XFI)sv!vBM;5|Z&7o5x$hrrO}PFO%q6_sc<>t^AfdE _P .q6?NA#LI@(PW!kA' );
define( 'SECURE_AUTH_KEY',  '$ABD_0>Zzf 97n4fs<6RX@l%PGxMS5_w:/7OB#zjvx<V[|d;KBuS=HIvKh}}B%!x' );
define( 'LOGGED_IN_KEY',    '7j/Mo0,Z1]wk$DOQQX.<p8a]PgD7uD-wR?|NV})MX(n6B<<2z/**D~MSw27uO=DC' );
define( 'NONCE_KEY',        '`^i0WR-!zA2CY6%b)OL#(HE?ank@%&5-Om9U$_i8/da:BK{{6QR?Mf}T/OP78rH;' );
define( 'AUTH_SALT',        '/d7y;1?/};q!xtgL7/*hzZCz5x}&yZsP2L#oQq.*>%~3{W :YhdePxUt#48w^*q4' );
define( 'SECURE_AUTH_SALT', '=J!=+[@.8!`ffh1(.@Mdg9/u5c.0Fnyh+LO!uyz1JS5w)_$Ev9ZZ2{%#~My$5(+N' );
define( 'LOGGED_IN_SALT',   'N,b_)6z+N=9h]u^3D<[<|*xp:]KJT^5:Tqd`7-9t{~|[ }TXj>QyUk8)?Y*h]T9f' );
define( 'NONCE_SALT',       'cAsmGt!9L]Uh/ZmjImOxn7Az:}425]r!MHXx*pHgezxybE13h~}|x^>k# /%ANsu' );

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
