<?php

/* Include Genesis to use with WordPress */
require_once(dirname(__FILE__) . '/../bower_components/genesis-wordpress/lib/wordpress/Genesis.php');

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', Genesis::getDbName('generator_test'));

/** MySQL database username */
define('DB_USER', 'generator_test');

/** MySQL database password */
define('DB_PASSWORD', 'generator_test');

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
define('AUTH_KEY',         'g)6dvTVg-}L9+]Q(Q[[ai{eYld8~I([n.`{h+@?Cz<ZkXGFC7k}/isM{/U#alrCk');
define('SECURE_AUTH_KEY',  '*([&<yD@zX(`a|[u16?y,<zqN?3FgmIm_bz9ZpiFwPau tMW5c`CdQ-+@k2j&b|C');
define('LOGGED_IN_KEY',    'ChyBvmh?H0)U:P;1wF80QN$rF}b;0iZw?#sFE! m>tbqrPlK8PBLHHJ}68FjYeA&');
define('NONCE_KEY',        'STNPdbs0|S&.>QB@k_V(0Q7v:GIt/3Gyv@p#K#e{H`#~X$EAF!R0]Q,CFY#_kqi/');
define('AUTH_SALT',        'UA<J(wlfFyU*|_z/FB-be@V^9/BY)|6_1IV(|-.wJ$v{/2{QeSGY+HcV[e|c}7=!');
define('SECURE_AUTH_SALT', 'B6$AnXOYO[|}FAC5|>~Gs]UDULum:|i(i39y#F3Kz-PL,o]Mb-%-|=*98PBztMk*');
define('LOGGED_IN_SALT',   '=kfA{XZLm+Y9GBA->B-]Dr>O73Xz|@x5*c8u#;mA.8Za1bgL4b,-w3QH<t;SH=FL');
define('NONCE_SALT',       'CT,0kjMzT+E!l(1-~toOa,i/B*Q3W]r!u`Gv/+&*l&W?qkNVy(4Y%bny@eJS?<=T');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', WP_ENV === 'local');

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
define('WP_ENV', Genesis::getEnv());
define('WP_HOME', '/');
define('WP_POST_REVISIONS', 5);
define('WP_SITEURL', '/wp');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

