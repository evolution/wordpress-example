<?php

/* Include Evolution to use with WordPress */
require_once(dirname(__FILE__) . '/../Evolution.php');

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
define('AUTH_KEY',         '%p_[wKbB0Uex|baQn-vI)06@oyl+xRjF7=fmG!l@>?A>QO2wbWrxo9V[f6#z+C@.');
define('SECURE_AUTH_KEY',  'wp6|m5|NPTMGFb-Z`U@u,+tv-:[ME:#)6-M-/J)! --nrntXC~0yucm|[r6r3$bt');
define('LOGGED_IN_KEY',    'egB9Hb)J8G/|dj<X](,OOBOOpD8;}7bxiskHrNQHh4kpR&,j9]#O7wnW-]J`M%Bl');
define('NONCE_KEY',        '%-Yt/D,<Vq`+G,PP64{R.~5 idO(=IY+< 3O-MJ7yoe7=nd^~zP|$=)|DZp2A7q!');
define('AUTH_SALT',        '|eIq,Dd3BR*|JJ%~Tmh42p=+?)Ny9>[l}5q~+3i-**xS|S|?LY=yp,IE|J9K*(&?');
define('SECURE_AUTH_SALT', 'v)ig<Ehiov</*kh?pi;vI^Im:h<bVj%K|>4jWW,^[3JF%#%x8DVz4.i0bb+e2PBn');
define('LOGGED_IN_SALT',   'p.^+i?SH.AphUN(%FC]sUg?gwYKiPX5=otnha_?f[*xv9l$.D+JJt>FVhFHo;|KF');
define('NONCE_SALT',       '):a+A+K,4<-K4H%M<<tU$REE+(*jpjOWJ|t #&F}>^o3-6N6*c|5|@wcvWy=-%u4');


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
define('WP_HOME', 'http://'.Evolution::getHostname().'/');
define('WP_POST_REVISIONS', 5);
define('WP_SITEURL', 'http://'.Evolution::getHostname().'/wp');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

