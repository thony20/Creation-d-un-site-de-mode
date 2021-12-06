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
define( 'DB_NAME', 'FashionLog' );

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
define( 'AUTH_KEY',         '[XCOkW|M);rkm{mI3L;oij_B<bs)gUmeNXakwv-a#X~e58:E)g9OzkB/kN8vmord' );
define( 'SECURE_AUTH_KEY',  '-XEGk3 }aULL4zil)TCsKy]Hl/k{r5!n^_;>]OFIgz/Xylz{L{:b;~uQ}s(|-QF=' );
define( 'LOGGED_IN_KEY',    '8Y~rk] m$MpmpYk$sZyJ&DXR8l>Q?q`p__<{DN1{RTf$A-R$;.b3[ME&?0d;] qi' );
define( 'NONCE_KEY',        '9](zy(uDPTT!I*34oL;albH2&?uk:/+.25-3{3H&OHrsxafnW8lg:7y~(;&i766#' );
define( 'AUTH_SALT',        'jZ^qK8tjlaK `>Dw|i1zs*}H,!&;2$!Ux^;J2:2Vy1RkI0a.a?a)mo%7-@h8;@X{' );
define( 'SECURE_AUTH_SALT', 'uku3q| $=uV1s/Iy&u=YO;W_}{]B#oTn?:Hah;ffrx38LA>Wnc,d<cs1*yMhwMV}' );
define( 'LOGGED_IN_SALT',   '6A-5NErZf]bfFUv-2G?Yu&|PBQmcrgb0Tq) -V@gEn?UyCFXOr7kTo^9w_GP4,NH' );
define( 'NONCE_SALT',       've<z;{y N<uX3%YUXR+9kOcD,HpFSlfv 9ldYSiB3?:id8GGzlS~1_.rN831?_3M' );

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
