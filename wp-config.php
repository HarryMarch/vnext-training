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
define( 'DB_NAME', 'sampleproject' );

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
define( 'AUTH_KEY',         'j|G`DRR+gv$s;? gOOl!7akJITC@??dEp=QRP$8).5dCj`+sToQ#oV`S(z*`} 8r' );
define( 'SECURE_AUTH_KEY',  ')L{l`Ym?w@;lN_lP_av}!ypGn3MW,16Nn8^(`]0@w&h%#SpaZj=UZ8>$sV)y|CFp' );
define( 'LOGGED_IN_KEY',    '$R}dW]vtPnloNQfpCfbL4DtVu?Kd JT+k[@@&fA-eU*Lo34f8dYr$<J^*on,#XgG' );
define( 'NONCE_KEY',        '/`h:U1gjWYL{V~TXOD?l:Wj3Mm]u$*.Jz6dO|=b!QgkAXP69msk7uUM> 5DiQ<hO' );
define( 'AUTH_SALT',        'zOena<!DC,1g|FC2zp<DI7VO}JY_;-0 Pm6u(37z.z3mEywL40{DxqVqi$X^!k`H' );
define( 'SECURE_AUTH_SALT', 'Q!mp9d;WS=}~?p%/cu[|;{Aca=,b{i*JVJ}!NU9=3m#%e9$AV:gOla)>iuv0ZLRz' );
define( 'LOGGED_IN_SALT',   '4TU,XbD{52F+{`Js!/F-*^6I6b,ZyJ+R@0BI2f]%DY|;75m%L&J(=C|wRxdmGd}8' );
define( 'NONCE_SALT',       's|U|u/4)mtawg0W=/;3D};V^]5;+glvj.T[]@l5 <`{rqfMK 9`fYsC!GXjpEyrW' );

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
