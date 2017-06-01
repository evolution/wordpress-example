<?php

/* Include Evolution to use with WordPress */
require_once(dirname(__FILE__) . '/../Evolution.php');

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
define('AUTH_KEY',         'J!oU}2leUiQ@#2D8@^$:k0ax$^H$)AVwi}H.2gG[1}t8+dW2sQ8C|AYa&GQo1N7<');
define('SECURE_AUTH_KEY',  'dpq<Tp(;bIKdlgUU`8miHPvCx|sm e<wZ(];Ek?b=K4m+#dBMU-.v`gM+zFX-?nS');
define('LOGGED_IN_KEY',    'pT|RnPj ;A-1gE*$f2.#*D|=*p>+A(C|_|U:Sr)}`=Jkz!Po{b2XS(OrG{:d  aS');
define('NONCE_KEY',        ')1h{9(.C<T[4aLyi@]vOaV4>-aSe74`kxk-z2|mu|8Q._0ii)tv*HBY$E+)9p|N|');
define('AUTH_SALT',        '9:;?17:L)YnIlTplYVFqEEcM!!KI%f}x+>nR#|B,-pg.`Tl^nt)p}<dMmhmMtu$M');
define('SECURE_AUTH_SALT', '#&|u6)*q^5WI %.<qMTm%b|lsI9qzhR`-/cIxu.v$-kY-POL5osRG^K|hBXYbnjB');
define('LOGGED_IN_SALT',   'bCyL26Geay1Y|g(1|ap`o~_o:yXpI>-!KJ`~m:LH1s86z4BJ-ZI2&VvLmmaV8ZW2');
define('NONCE_SALT',       'zO?q$hY=g)BuEyNQ?3n1vUBSQK*doI+i2+P^cHJ=c,oDo_bcdt4AT5B6?5HP{{%p');


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

/** Output rewriting for production.DOMAIN or *.staging.DOMAIN **/
Evolution::rewriteUrls();
