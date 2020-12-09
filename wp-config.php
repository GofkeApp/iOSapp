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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iosapp_wp52156' );

/** MySQL database username */
define( 'DB_USER', 'iosapp_wp52156' );

/** MySQL database password */
define( 'DB_PASSWORD', '887(-8IpSF' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'awwewalfoxygo7ma1zkzhd0ioi9r3zms7s0gjqr4czn9phz6oavaeubo5sozutjf' );
define( 'SECURE_AUTH_KEY',  'ttdocjkv4c4p1i46intgh6iphvlyyawdy9xme6sn6ueynacx9tejzqp4riaf1vvz' );
define( 'LOGGED_IN_KEY',    'kiatkaekllzaatww2vl0kwkmj4xktjbwbhtlhggnlara5q1abgmganrwvgwrilcu' );
define( 'NONCE_KEY',        'ypvbncwhcdrs2kys74jma8plmx8evgilaw1ulgfjuuayeudjjs1xawiwzqwg9orp' );
define( 'AUTH_SALT',        'dlax9p9xsilxnonqyi4uhs5luajzwijyzu0ydq0crero9zresq1jxbgmhz2kzcsa' );
define( 'SECURE_AUTH_SALT', '0gpszexbax0as5p7g3guczzadb6jhsgkhauombaomgelovka7jrkolhgxs52jkze' );
define( 'LOGGED_IN_SALT',   '1ipu98g9mwlg8wnhsybcsb442jazc013aezultdxzdf4ecemngdzhaqh4oz4htk1' );
define( 'NONCE_SALT',       'w5tif5zvcccozt1pcuexqtzc5qudbmhzh5wjmcmsqrh5gjj4crl2alyq6eflxfof' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
