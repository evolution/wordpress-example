<?php

/* Include Evolution to use with WordPress */
require_once(dirname(__FILE__) . '/../bower_components/evolution-wordpress/lib/wordpress/Evolution.php');

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', Evolution::getDbName('example_db'));

/** MySQL database username */
define('DB_USER', 'example_user');

/** MySQL database password */
define('DB_PASSWORD', 'example');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'yH1e(m^{Q1^|&iJK~zfb!.Da-FTvX8K61A>XDMD|kGX+EV8[m3!f{zJppU^uq]-f');
define('SECURE_AUTH_KEY',  'T#1l>{Q#dHyE7i[N4$n;Qp*-v%Y9!4KG|PbUB]L& C|/SZY{&gwXc&ZK0Q7h.A5.');
define('LOGGED_IN_KEY',    'Bcm4^ot-g}T8M50TC*~N>/Fl[C+-cUm<AL7UnR C<`y|y#vAQuD0t1r)uhm+>g/o');
define('NONCE_KEY',        'i_67nKGu=OVQ;gAaJQ^^r@mzY.sT/-OO?)(ZzqVfx&s(YK6stY69FU>Nl$<6(>^f');
define('AUTH_SALT',        'M]8Y>V@UaYc1*75@v]?-)q4fr4UtI?``*$qlie@vk<]JB@_|H!?@BkZG^Cyd04b(');
define('SECURE_AUTH_SALT', 'J.MVo^2RAi)<76#5|HbEm6S[]Bvy%&I`gB3?>){FJswa*4=}]k>3Yv;dT7[v3Ndn');
define('LOGGED_IN_SALT',   'U[5Og*.I3A4a3/M{-GK,}4-ie:EK8j:~c~pQT|.MK6-K22~q>(?J_jFv4^TPkm9I');
define('NONCE_SALT',       'yV~8-#:`q8]6MU6d2}R}WPA<|_PO/r*jFw)V<2^^%s84/jDe E[edpZ989 ,zp?k');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', Evolution::getEnv() === 'local');

/**
 * Custom overrides
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('CONTENT_DIR', '/wp-content');
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);
define('FS_METHOD', 'direct');
define('WP_AUTO_UPDATE_CORE', false);
define('WP_CONTENT_DIR', dirname(__FILE__) . CONTENT_DIR);
define('WP_CONTENT_URL', CONTENT_DIR);
define('WP_ENV', Evolution::getEnv());
define('WP_HOME', '/');
define('WP_POST_REVISIONS', 5);
define('WP_SITEURL', '/wp');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

