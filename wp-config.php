<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'piesc' );

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
define( 'AUTH_KEY',         'F5Fe%-0]?81khV`t*%&cimGB=F{:*r,0G1qWa6<.cB%g~f*tDl#Du~=U];)oR4Kq' );
define( 'SECURE_AUTH_KEY',  'M)AU[/V?P)5 4&mUlhmZUNxf!r?c}7%grSw%t1wg|z_.=?s9uGzpwe}&@:hTc;VB' );
define( 'LOGGED_IN_KEY',    '&pRC4j&*<NRB_ #`]`JC^ +!nr^ZnB>(d(k:B8ge-!,>2w51:&P*:Z%u]Z)=U(Jv' );
define( 'NONCE_KEY',        ';{A=a%5%Z<>4wfW5&A4./=T[hlD.E(Wx#.Hm59m-$!&UO)K{;>YiDnx}{7iqjT2c' );
define( 'AUTH_SALT',        '6T%0E2{.28LFfXYh3 &YW3W{3KNl]XIKfDlF!K6BXDv1EyVbQ^bED*KN./wygWfE' );
define( 'SECURE_AUTH_SALT', 's^o=-zuAZ{8ZUnk*AVY;0S7<E(KhDx}5.nN0U`/oAG0bgIq0{@>MfX53!dbM!Y6R' );
define( 'LOGGED_IN_SALT',   '_;VGJ:H<?|< 4Fa^H|Ay%-U /S@k8~eVPt8i~uCdc0v6%IgRiD9m]yJ2h}ugrChu' );
define( 'NONCE_SALT',       '&-d9=olW%-.J9c2|{@BW!-RSyL|;g}5{GR8.iqM9>t8]_V(^vFOAm6;^+Qt5AavC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
