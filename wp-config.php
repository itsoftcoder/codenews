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
define( 'DB_NAME', 'nes' );

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
define( 'AUTH_KEY',         ']0|2ma;$WskQEdOc(D$d`6En-XH90fnFGIS3kcPydIoWY%{9fo|J{irO6|9,k Z~' );
define( 'SECURE_AUTH_KEY',  ':f(OaOV*T8TtB]`Vt_rw@GmFt)sC2Q)*{$6^c~t 1@ bWS=>`1JI-/(gVqF=-<v4' );
define( 'LOGGED_IN_KEY',    'i9rZ4lJBe%mY&!9TQK@Lq$BP38O*Z2e$^4tL)p<-]xzO^Vc}DE$[GrIQU(q;orA*' );
define( 'NONCE_KEY',        '6c0@`7wf2kZ5wvVo[2 |xAv[$UJpmQNJO:e?Tijj)i:G4~rn=pJn;pxP{?*A(lB7' );
define( 'AUTH_SALT',        '*GeaU`RlC<QN_R1n6df$nPAJ/=2$[jl{g%Z(I<5I@ T8.*O/-q{nsoN-6MP3];KR' );
define( 'SECURE_AUTH_SALT', '$xl+,^LS?am*CH0`R}-cK{Ap0T^NDK1+.sZuffL_]3Q.nI};n`cJ,Y%15lZa2xCO' );
define( 'LOGGED_IN_SALT',   'G9x5!-W>Q$Tl*]Fj~rQhjekneg^bQi8P{<n&|RcY&{P{3m7k $Q_hQ<wf@nGqGIE' );
define( 'NONCE_SALT',       '#k;DMRO0N53yqZEjkUk%Z3sGMChye=`LooO{-DAZ,.@1sR}{DYjt,#yf=Oo@B!,A' );

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
