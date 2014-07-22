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
define('DB_NAME', Genesis::getDbName('example_db'));

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
define('AUTH_KEY',         '>XATkU|C!U;$Zo]3`~|n^Ks?nYf^-b`:taSaz[^!d0q=yDi]8`^Yk%~,pm &PZ,<');
define('SECURE_AUTH_KEY',  'A>@T0AMI6^Nixc6HUC(Kxpds+0(<-yfhj51. a2N8k&hV7`jtzd=@Gjg:Sa|KM9(');
define('LOGGED_IN_KEY',    'g?]T9c._oabP7VZ+i-kzCfI,,0|c6F85J*.xD`<hrUu^4}@X9>o=Iv}o5rOA#)W+');
define('NONCE_KEY',        '4z9Q)sSMW|;5dkO,m9joYMU/LYK_7LtV+uCHIP7@WiF1h;Lf#R hru6t<?# Kkf$');
define('AUTH_SALT',        'k#}J>#DKTGQ-j{w@b5>|d63.-*J~&K:RAl-=a|TfRE}.d-?n5*kvnM]8{bg|vl9A');
define('SECURE_AUTH_SALT', 'fcB]HomUg^LhId<$9c(p]c[=%r.i<;jYC dCK,D 8evM6cNw!PfN>+|NS^P*283M');
define('LOGGED_IN_SALT',   '83UpKC:+PWM7I;APR/yT}0dDIgWIwJG.]2=;2tCUVNk_{FTt!X=RoF#Q|^$B>Qd@');
define('NONCE_SALT',       '`Kb-//Uvp$cqNB3gFo:5J9gN_ahR0-X-fcqwXAl+<O{boDsHbc`xiJ(]kki^EV:6');


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
define('WP_DEBUG', Genesis::getEnv() === 'local');

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

