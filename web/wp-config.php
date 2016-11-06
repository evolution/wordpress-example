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
define('AUTH_KEY',         'nO:$6&)Zq6{r+?U|:G#$Mvc>,Nw_#Uqz,IIYw-I/4-&z:Cj+K+7k8aY.<YJ_4r1-');
define('SECURE_AUTH_KEY',  '5h0LJLvz)%d4eye[?vp4Lr55g]Aa$jeAH_<Q<&?+z] ~>-8*<`I_V5I+gafv^`#z');
define('LOGGED_IN_KEY',    'f^bu(nNumZ4}DfW8m?g3L0Do34+kQG|}y*ceA#F,aWUU9(0~V1[U/Nw4[]BMSnM$');
define('NONCE_KEY',        'GRR3L|W(QCM8JcB|9b/Ty ejFO`6b-OqMb4!c#a(1Ct!}&#k#19A]I/w8OMNb!}D');
define('AUTH_SALT',        '#T<-h:?ZG)O^d2vmz7GeFV+TLIQ-70QB4^DXUaB#b|nrrsIby|FIW==6qU!-KV)f');
define('SECURE_AUTH_SALT', ']=1uj0z|8ynW tO}W;~Kp_,X3Vp+s<lh%PCbuxzng`DL2-IF|zW&@G%:=A>=c;cd');
define('LOGGED_IN_SALT',   'k.bf{J|=+`qG8Pf&VDY{=moHiRglNB;?tQm7a;BVm Q*V++j6;AxTtj!5f*M[] {');
define('NONCE_SALT',       '#0Hrhrd:l][AE-%_a_m+<x+Nnn.z/:h$f_d!o~dAc]~}L]m&w=>&Q7%-V!=@vqKm');


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
