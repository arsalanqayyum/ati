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
define('DB_NAME', 'wp_ati');

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
define('AUTH_KEY',         'a?3=(OG#zMz> aufJzA8`Fm@?=A/nuMyN3cLb!.oZ:cii$pD:!IPhIwxm<w}JRse');
define('SECURE_AUTH_KEY',  'MUtn8qfJ$^VtGz+E,tjbk:QQPW!Zmj&!*xo}jg%nv!dQS}(V;[+fo4Bt{EJ&#)Z6');
define('LOGGED_IN_KEY',    'Kn;AhlX#VB3j32!P6#$W%GToXo.)u=>$VEIod;&p:fX*3+pQ};iS1U[pFf[N*isc');
define('NONCE_KEY',        'NI.~xVn11H0/]wuTvxCe>y>,YuZZUZl)}%xg:_DYqeCKU/]N5X``;@-V5<u~XSK=');
define('AUTH_SALT',        'v`+z}}DittF]w>Y];rN08r*#99@N.IE<Zw]eTGqz}^v-y.^E&|LADJs(q , ixR-');
define('SECURE_AUTH_SALT', '[soEB.v%2Ir9Gav^c!bda7v]O+hs G<H#MlmOpbQ/I:N!OFeR)g&D8LU8T-onE&~');
define('LOGGED_IN_SALT',   '1GKs`JZ;XBGe4mRx; FSr>!-UlVFt>~S<=|omOS_Jq[8://hoId?X d BZ,s2M~d');
define('NONCE_SALT',       'zB<oXTMqXJl$%D4%[!WD+n(-db0H<9a7Y22:;BYf0^}!WfTvyKh-<75yG5&*t&Ey');

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
