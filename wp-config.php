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
define('DB_NAME', 'test1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']!*td&p8f>Z+1$3^x%~l(Urs<)Bhg|tFI u.sSV;Ldt7X|t[o*u$Pn :Ml<j:KnK');
define('SECURE_AUTH_KEY',  'nZnqaka9!=H|]HGx.8^Z&a$nmHfCU-y.w|y6:n#yryYRj#EHMjI#>mw4;G:97Y%+');
define('LOGGED_IN_KEY',    'k&|2{5,bA6pW2n6:&UD-#52$8+uOY<>VG&z=TICs^|]S|PJk!U?SSy`b-3p%q]^>');
define('NONCE_KEY',        'I$jW+s8-s%dO(Yt0I]0a6=T!2AzBdmpC:9#H~u6L:Y~{w7c;S3v~JPx0J-bqGT+H');
define('AUTH_SALT',        '5f$x!Y@gUOtkc}fT~a/s;i,Wl/+?|@$BADAL+51!pYEJ89xN<BZ(JDC{l[f?1B{0');
define('SECURE_AUTH_SALT', 'uU+a$|kz76C.jzzw,M7_c|di+|*C4rE:tFex0I9neTFIQa]WweWOy4k?1L=YV|Oj');
define('LOGGED_IN_SALT',   'g:^g?L+k4 8?FH>`(-)8rHik&+WKISInX*<`H;b&viJuL>JslOdI(U[l7-xMmo=<');
define('NONCE_SALT',       'j6p9A}r6g4_$:n3l *)>,%l)?~`V#:!oW9aH&9QoF~I],3)f=%.t1-|-N^LxovKp');

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
