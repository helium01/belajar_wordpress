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
define( 'DB_NAME', 'basecam' );

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
define( 'AUTH_KEY',         'faQQBB&hG{baR?~C1=itd^<[]:BJj#jy:(Gq[NZb_DnX4kI)+NV.F9C|=yFfMHRJ' );
define( 'SECURE_AUTH_KEY',  'o2LA]YE9WuU_1ed@TBQ_XOn3I2{QuO$*f#f><4)2IBftm;+H(PE|NRXX*C#z2W&C' );
define( 'LOGGED_IN_KEY',    'J1.o{@fI ,55@VT*?h[Ynk@u)d1Vl;S88`NRVVVSV+LUgI)4B6[tnxxbCVq9_bS9' );
define( 'NONCE_KEY',        '5H<qBygNY^!:.&UoD?imgt6n<DJIAb9{tl B*iG()bY|^j(f|o()jETnGivkhs}a' );
define( 'AUTH_SALT',        'vt7HzM4D@lk]<J/e+tyd#:GN7,>33?C+8M18K@:{4x[(owVH;AcpkYQ9mcr0-C6t' );
define( 'SECURE_AUTH_SALT', '@gPUY|1{:8Ollt9+%C<14F(Ify}5p.62a^F3ugOe=,k(W6Hd%o9m|4ODi |3<Pv(' );
define( 'LOGGED_IN_SALT',   'x6SW)n?*2?GKwi-LCk683Mxxbsq}n88DBsfbv.q.M?_.!*7TCi^Ef0V6K(}G!gkm' );
define( 'NONCE_SALT',       'j_4ppvL[C9K]xt=gc3FMdB*LWWFN`m];dTgBvVpO%R*;.mxNs35V}Qy{DEG<~A? ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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
