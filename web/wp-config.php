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
define('AUTH_KEY',         'OT96Ay](tgcu6~n2P=X;i2tZ&.STkiR-k(X+>1s2-G&u&tv5q+-aQx7+CZY0_-Fv');
define('SECURE_AUTH_KEY',  'v4v2*@(kL{iO6{Z55=Q 6f#YEQ~EM]xHQLoz+WF|B6X-FOO<9UwI;d64d@+J7jR(');
define('LOGGED_IN_KEY',    'Fv$pt*%-Zk^YS$ Sl9fJ-rY+@PowM9+]riVG7P<=6-gj0%OL38wM|>OX$_w,G:`#');
define('NONCE_KEY',        '6y+YOtW4++{|<k(s!egPC(Q|||#lC!(]|xb)t{#hxsw8=AgFtOQ{N[5hKmDD#pgd');
define('AUTH_SALT',        '^Gq@(T6Jb}q2.)LNGLRtOT>T%^C3<-weES+:lH+_j)8:C3Tw2wcnzLp^k@73G%[^');
define('SECURE_AUTH_SALT', '|u@eL{.|87+d}$|#N c8z+D8GR:iK`pi=l>9|<d <HuI>g)00[*ug}Y=:&&C9eke');
define('LOGGED_IN_SALT',   'W@m<qCp0Xm[/09$=LjdX6CeCAl@pi*[dHdx<|SJ5G2`-aNwfpo9>w4sr+8=++/|)');
define('NONCE_SALT',       ')Y+S2wR<8wS!:!DutDG@Jf^mwjjh5=T2ob7dC;kBt+6o`tCC?]uRVC#|W%P(jvGz');


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
