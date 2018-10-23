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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', '2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');
define('WP_ALLOW_REPAIR', 'true');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$J*/PzccW$-JYNX.j.td6#-iCHk;dzVwGnwW/B*&g;t@2aZFaQ%5G]1<GjEt|P`B');
define('SECURE_AUTH_KEY',  'dov^ IS #-{iWg)=T42b!eu++Dmw==IUckVb>mmGn-9loI^%$2O|?R+&^#f9)h.3');
define('LOGGED_IN_KEY',    'EWVIWDfqV@KyhPkR~l%sUX}jm!ZE<Z+WudsA5SZh`h,];`H[E#(l@+^BgDX?$fIf');
define('NONCE_KEY',        'uvBX<a/MeN2GXdW`z=bS$1,z7zV6X[!k#Z%M?hay4H~I/54GHq?*c:[Y P`I+z.w');
define('AUTH_SALT',        'V5i5i-{4z4|ps)C)]OU7L%auu7-/ks5Bp.#<8NZ+5|h4^OO&5;dc{A_!k;qC4Is`');
define('SECURE_AUTH_SALT', 'oBU&b{S [h)vIp*Xe$(rRb1G;9~!HWIMe-+*5#<v-GNyps!|E7d*P^,|o1Qd$2fW');
define('LOGGED_IN_SALT',   'Y,@r??Gj3LWMSmX&n-ESMbfS0RL?s~jwaEf9-#J;&8Ctgc7@[IGG!6fz&o4f:@Fl');
define('NONCE_SALT',       'Gwr5@b|8w460[}$!o1W[by&;jI5OChB=wl+Gos=>hi8O+V+<kYn1#j76.TG3bDFp');

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
