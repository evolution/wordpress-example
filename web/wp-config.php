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
define('AUTH_KEY',         ' rhC19Vql?v6g8MC-@eU(nu?#?oKv|nuCNxM`Zl2g|VWC+; 7I #5<ps:8zD!=[u');
define('SECURE_AUTH_KEY',  'Z+JD(,yJLDfZ;_mhHP}Xu(&5Q^mJQO8Ba1}Ql0<H]~};5:*;i1xV%)0K-ba_;m^k');
define('LOGGED_IN_KEY',    '?x~<Xfm(UOVL?)V@#fA21,t?`^27)fsno;7*V|HjI.F8-lo~zb%u:If?6=0>I7]%');
define('NONCE_KEY',        'ybjl/ejdU3Y?_rb%LB?3N^Q$Lm02a4IJN!<+6#j+>pBjYDB(b:xV}f9,LW[wx$x*');
define('AUTH_SALT',        '4Y1<ZcQ5)%AZ)IMrVf~JP1m}+Ea9<?kgXoXx4vJG+v#Y`2+&_yrLR0+?HaD>;D,%');
define('SECURE_AUTH_SALT', 'm&o)1kC@a/`BQM2.^:h65d5[,={(+fCm+vYi|Q4&L7`10DC>N?BWAFl8p>aB_S&&');
define('LOGGED_IN_SALT',   'i4:+aPriWZtpN{$iPbHF+:<navg=`!W@f}XU~m{IAX-^yVq;|QF};<=}j=vX5N?6');
define('NONCE_SALT',       '};6%df]tk/1/|j3;KD@y%g1$.qJ[_VR7XdBAJ8Zn=2nK-|-3!b-;uLU#EA+(B{F,');


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

