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
define('DB_NAME', 'u197463137_bbdd');

/** MySQL database username */
define('DB_USER', 'u197463137_lex');

/** MySQL database password */
define('DB_PASSWORD', '8w2tahMSv3');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.es');

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
define('AUTH_KEY',         'dg+pLrN#lhY`@<fzvV#JTa8Ge#XKyHv#m:XXH~tYeW=_N{6|Vs_4`FvKv;%w;DKz');
define('SECURE_AUTH_KEY',  'SGUQB9HN A>qfXUY<qASs _S?6&T,Yj7sNs0ek,Hn ]A?U2lUh#U9zFx]HSHbmQ|');
define('LOGGED_IN_KEY',    'Oy5:(I8|o3tDTl_GO]/l=g$u=<GY=O$RHCQ4mMMTLMPbFvqiL+BEYMUk_,a]DVmt');
define('NONCE_KEY',        '+dI]uSXg(wpE]d3PWN+b(]|Weo|/2bfb8q|e6[xbm7fg/a3z{5m&t$BN(|]2qk11');
define('AUTH_SALT',        '-vujS?aVU])SP0d{0#.BPWipKsLrQ1H|R7+Mz46_b3PUqi-`ob9fcTvjx(23yl+}');
define('SECURE_AUTH_SALT', ']nm3|w.jfi6h#<bi0mR`#Ni^3w#_0VT@p$iLtk)ntR_6M_`Y*Fdm1bqda5(_ G~)');
define('LOGGED_IN_SALT',   'E){Yg?^rx_cB27p5Ca%aLa?ns_;joK$#Q$xJ?xLTv|=QZ)<[o`6|`n3kuD([gG8`');
define('NONCE_SALT',       'qi=,c6U.4.+?m7H=PISf!4P.*UJz}sbDc[Jb`^:`1sQbcwMM~6KI_cSu-wWh+O1p');

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
