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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'Ben' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a67b4902' );

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
define( 'AUTH_KEY',         'c>Lw=dDYlNF7Kf=<p?]38vUbBq{mWK)tiCf@mUqAUH%J6$3pDd/FnI_j|xUf<C7F' );
define( 'SECURE_AUTH_KEY',  ': nmU~Fft(Sas8UF>1|nvnzD],|2=/]8]tOg{!fZJWO|pm*Cn*OlFzVY4$vtDmvk' );
define( 'LOGGED_IN_KEY',    '<yg^6hFN[BPv#y9cv:+mX~>Dq2@zwf^:58V`b&LyC$fQ?.tBP$O!X,*e48ghb$B/' );
define( 'NONCE_KEY',        '~)g5si/O1D7bCSo5$tZ@Bp26Ne<80<42wk9=09JcncKOJ&B@X6usM5eduKP`v@[p' );
define( 'AUTH_SALT',        'NNoO/1lBy:+3$=of}nh3<{ReV`oOe<UDB{p0zCOW>J%0WlV[%V8iaW]8<xNON0L)' );
define( 'SECURE_AUTH_SALT', 'O#Hi%z!8&Sg@`T`qE}|WFIUzqnGFzW1is~53dc`% TKuFdKh!~FG2&^JV3nz(6)p' );
define( 'LOGGED_IN_SALT',   'f,TIdQytrt#P@T/.|QR8;+:<@%FkUW2nl4yS0Xp%*%kuh){!KpzSHe9e8&3b W2^' );
define( 'NONCE_SALT',       'k)u2R(,XcBp5)i&cV>8k[,=|oJ^M3Yr>i~>=2:PSv(F8Of{jS@~cMuQLL;1abq41' );

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
