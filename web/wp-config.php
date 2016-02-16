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
define('AUTH_KEY',         '=MOZdcEMV>ym)j8HH$)Kb)/A!*?=ZgR8AVV~{ ]0ZI()]VM]VdS5nodRu=<+>L/)');
define('SECURE_AUTH_KEY',  'G7[e25+Fo{d~j9]V)W7QG@,V/%oj1k0-n9RGD< ,y,`xRhv7v,7 ;#2-]Ac1(+hE');
define('LOGGED_IN_KEY',    'utSi?=YJ:99X+xVa5hheh=0dKePuKfE|NCDg6[r@<5?bq1HV4ji|>+V0RE@F|~bB');
define('NONCE_KEY',        'ljU;vQuq}~h7n~m+6(::.bt|aJDbl|nz`1Qb|yI-cxy L%x}O3,!0jd^#<M+E+b2');
define('AUTH_SALT',        'Kp;BuN4]92qUB)Q(DQnhTc}{{~1h26brw&m>p-VB_#%lm=ykVaAdMYp~Vxm%kc_J');
define('SECURE_AUTH_SALT', 'UD7q%6wf_{.EzdZpOCf-rhdH|H-)@M=j]H?Ivf!H^#(z!A;-kNHQ5nqoH{%!Xr)7');
define('LOGGED_IN_SALT',   '|T<6t-P-x*+;yn9|zov0|G<+C-EJx8_lj|x|`Y@UQslO(+kw;@X-afYrl0)5A%B<');
define('NONCE_SALT',       'LfEe$C$,v0z,VjB/i-+*-2F_AE6e^3+eoL!:&Mu~B2X=+}.A%:W_h*cLOLz:t}kF');


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
