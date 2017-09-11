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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y3:/^ ]%%zV~tRkhK5:_A}`o^inOpf1mBXK$q?y!A,&]^p$n=$m|3La|-9EgHd4=');
define('SECURE_AUTH_KEY',  ')<3*+lF{7&=7IKI|L7w!i|gOE2 RM3aRbm)08=5U}{ll8!za_-uYmcOTOMqm!?i[');
define('LOGGED_IN_KEY',    'YOiF7i`.Qj{2qtpYk4@!|A|dilBxZmw84$9YkXFdrq8x&zW.>5F8fby-{N-ewad4');
define('NONCE_KEY',        'ctDX~^s</LY,F%9/:xG59JRcHGSN9:M@,b~Vp]0^1$Kkj_N:s-S;*oY=zX?Ok&dJ');
define('AUTH_SALT',        'A+Nao^gVc7Ot7osxv1G~usRJZb{e[QmM(&A:9X[MjpeRTI=k[j=@!Xvr2`u1`tc8');
define('SECURE_AUTH_SALT', 'LjYtRo*|:=]]n%n$c:._sxI;I`ihRxS tc-m^Jf__mDVYbBB[qA3 W!Q>7-2GJos');
define('LOGGED_IN_SALT',   '23Aj4[(ulE)l*JVv<fSqiFVIiT4-o| 0+$#v:W0#Df}p+A:XN$_bvKv R-o1LkL[');
define('NONCE_SALT',       'Z59 {+%2}qWCHXv>(uv!Xb=>RI+rDYX%o#&%Dbyy_Ff==?E1_e=hn:ylUXe2kwHb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
