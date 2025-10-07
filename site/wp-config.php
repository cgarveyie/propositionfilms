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
define('DB_NAME', 'db1021852_sa94031_main');

/** MySQL database username */
define('DB_USER', 'u1021852_pmwp');

/** MySQL database password */
define('DB_PASSWORD', 'M+P/D(tO3y');

/** MySQL hostname */
define('DB_HOST', 'mysql1115.cp.blacknight.com');

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
define('AUTH_KEY',         'sz7M[|U{Uxf-VCzvt!.IWdQ.A[t)-6nDr5OGtR6gP(R8m&XY$|?)]h1obHFBbQ+}');
define('SECURE_AUTH_KEY',  'C;ZK>vLa3Re+pz=DZ%WMX@DVA1[Z96 &,;`8V`W-sJ==|1dT(Iu>v$|QYG/Pk%B;');
define('LOGGED_IN_KEY',    'W*yBZiIq(.xgEIZ|W^MnM]037K#{,*knY(m$oBClfGJGDs}4)L9[a+ AMx$M8sy#');
define('NONCE_KEY',        '(&I.p>GxkCc+o|>+8E5_}cWD<rJ^@fn>a*F?g{zV+3EI2bNT_2ne9g+bvSC`I_+k');
define('AUTH_SALT',        '5Zz|b8c:PlGQHrsrxP|7})@~4T3N8hMP=p}EFey_C&.7$siQUm-9i`;e=nsA|Nm`');
define('SECURE_AUTH_SALT', '!%`re4_*_-_AYp}BToV9IJ2Sz_YrtT|>gIFqb,aG0Cii:H`-3[#]}RhnNnk3#+++');
define('LOGGED_IN_SALT',   'YKn~VU Or*$A}|9+5MUKsOm,c1B&|k`I03C?be)1Fb{2VE<&b*&+|V]KOs*})W`d');
define('NONCE_SALT',       'iSl*k#CxYNUGtEyFv$~yqJu+<G<JgMxBYVKgQ9Tv%k$HmVK._:I5!^CnBt-}n]YY');

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
