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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'library_db' );

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
define( 'AUTH_KEY',         '5?9UP4wea#`>hS$R}x*kz$Ig)oBU[JFI`/eXc^b cGnru%Z!+u7hgHOt>W-Ri%#k' );
define( 'SECURE_AUTH_KEY',  '~_EO~ccZA6BIoZ3U;RS/;6F(Q0mCVk2UiRGGL}AY$bD5.Q$ZUKm$r8ii#@tB7kE>' );
define( 'LOGGED_IN_KEY',    'KCWDKv/fu&aC/~&z=0NpFI/>jEGJ8r}dMN#8a(j#1(n$3K-o]QznTf21_uFP}}|F' );
define( 'NONCE_KEY',        '!(<6U-Q$d;q #!{/ouN;OJkP3:d{:7Kj2}0BouxLJ{X}!]>1}:J+YBnv_:Gy/I1E' );
define( 'AUTH_SALT',        '[|SdvvP-r8/h#^DoO-]a5aDus]x3{cBUKYQXyY#~||7s8(M.o)`b+%jL?+ __^?I' );
define( 'SECURE_AUTH_SALT', 'vVL2xx?j8?w,7) *$1Xfe&VK({i{U08YHy?!pX6o76JTS#A]&$4/pU7o9aqrtm9.' );
define( 'LOGGED_IN_SALT',   '_MF.3#DUr.lP9jXnb#o#0%nBvYCZ#{kvH&h#6o/}5b.@ql~)RgS2tf+$GN|jTT2)' );
define( 'NONCE_SALT',       'Z>A`U3V |z 4qYZ.8ni%aJv`7EAzA_?D:LGCGag1ddEIClT.svWZ:Yn|pWftR9ww' );

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
