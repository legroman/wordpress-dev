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
define( 'DB_NAME', 'test_work' );

/** MySQL database username */
define( 'DB_USER', 'legroman' );

/** MySQL database password */
define( 'DB_PASSWORD', 'roma0711' );

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
define( 'AUTH_KEY',         '8^dC?stW@v%/!NG!FNN<n_VN@!v*w3._G@c0eu)]Y$NC=PVFy1OBI{%jDHve}gxA' );
define( 'SECURE_AUTH_KEY',  '/&l;/z!gZ[P[#mPUjC>:BsxNf=RXIc:H)we9S7!Q`[0P8c%d.jid*VsArf0}wX${' );
define( 'LOGGED_IN_KEY',    '${u4v|;V? w~Y3V@0%q$jbKAnWN@HPa(,x!UhxeJ0sg4UE=W!tRQ.pPnE/Zvk]Th' );
define( 'NONCE_KEY',        'zy$xgC&OEB_8!+2;JNv%L$@eS9a^FJI-OFR Ejpiip=8pmPlw:r!Xpqh3t_##B6X' );
define( 'AUTH_SALT',        'Ntxkrys2r}s+>p72rv_;+!&Y& cJ><U[s*]vSkVJ+Csfh[.+}<M,S,H9^z3df_^S' );
define( 'SECURE_AUTH_SALT', 'P#P9~]ha`HQ_pj+{TGo_;b5 nf:>* 9s{`ZTh/g|P}zEI# D~orN~p4%B3,bmg k' );
define( 'LOGGED_IN_SALT',   '95Y7Pp A@v2T_)J kB@j>vmn,!e!dOI#5(=RcKWi/%3R%NhXGX{2*oCM=o!>RHA<' );
define( 'NONCE_SALT',       'brseRrd,Y3z8(s~~&~#N=He*<kB_[UdQVR5f$e}&F%`fR{SNmtpEw-Q];|&Ue4>]' );

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
