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
define( 'DB_NAME', '20185268' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'KObpY5wxI5' );

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
define( 'AUTH_KEY',         '0~:O9!_ti ++0`~i>_#iG}D;p4$V-AQ<51^e,6mn950LldbMCD;oVs}$4B*26pJ>' );
define( 'SECURE_AUTH_KEY',  '.Cn5nE!,LE/+aVIF2;kXta$qxBDY!(V2.)<4MxMFl4uTX!Lu{y:{vYKx4iM`-Bs}' );
define( 'LOGGED_IN_KEY',    'p4L1{pE;b!v8Z ?vo=}<ziN7yuXZst~AKf_1)bG]qIndHoc[yir6*aT;7$yb_jd5' );
define( 'NONCE_KEY',        '<rv6XoG`s41Zj)-V_^H>u(t~TAqc~#pP6Z{aTmHp^9rdDv;?r>sL ^{ES3]6r]{1' );
define( 'AUTH_SALT',        '3#+y7Hv[GZ>oS~n9({_FSjFd9K{s1{&]b(qgbnr7w1FFom=k!2x#ND>@`8SSFF|t' );
define( 'SECURE_AUTH_SALT', '%QN*DObH5Ms(#h:E)s?>v<Es}*26g<w.h`hNog@aO2VB[T1wy$XGl.C@:-B$5ily' );
define( 'LOGGED_IN_SALT',   'O>At&9$agjuDb%JwZ8^EKC644c|):$;-b2hqhx+Gs:P@%2YQJ<FSosHkZPYk!bq#' );
define( 'NONCE_SALT',       'fq0bQ:9HI:Jrz3aO5rx:xPsc*TUcDYl!EiM=AwsdiLZtF3ldw`Dg*R}yLWJ}Na2]' );

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
