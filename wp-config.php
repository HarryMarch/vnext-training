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

define('SMTP_LOGIN', 'dattlq@vnext.com.vn');
define('SMTP_PASSWORD', 'adsdsd');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         '0N3CX0Ol3<NuCkOE.M>@5a%-Vt)?xZtAVaBX,B:UK&ELQLS+#hW(hkw JHS%JYwF' );
define( 'SECURE_AUTH_KEY',  'aKL]GkF-2QM85dx]{/e}3J]QLFBuN?;Yz{2s l`r:Ri4}kOc2di8[+]IwZ1r|U&E' );
define( 'LOGGED_IN_KEY',    'K^kh$yNp1cPs@lg.if>;67M56qK!#.1NFDR~!!v*TF>3G.L4hQFe?|wQp8j7OP{p' );
define( 'NONCE_KEY',        '[&2?PI Z+k~L[38-LcKNK8l~H,f>!ET|A#GS^RV[It6Co<2C$a>D$h(S&?6J)]jJ' );
define( 'AUTH_SALT',        '_jg.?VGerGmj(J;<(m+.+$j62[a>am+?4)Ey!eU}re?~LW%hX&(JW4xGD5c5j:ur' );
define( 'SECURE_AUTH_SALT', 'dg3+rP>K2(90 +Ezx3ZH6(^72>B>HA{]bI1Fv(STT=;o#s5]C16/<i?rRz&)OX7D' );
define( 'LOGGED_IN_SALT',   'o?[Qfr=4DjmL0PRcO.%q238|598)B{hPfjpPiaTTsz`p9z1+(@Tr5R9:O*$@zOO>' );
define( 'NONCE_SALT',       '{CF1l#|A9}Z)^a:G+I6,*MW=InS3cQUP+}?m|zh{_4xym/-7VP+>y}Eqs*db5cq<' );

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

@ini_set('upload_max_size' , '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
