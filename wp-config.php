<?php
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
define('DB_NAME', 'wp-brianenriquez');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress' );

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/*
WHEN CREATING THE WP-CONFIG.PHP FILE ON THE PRODUCTION SERVER, CHANGE THE ABOVE TO THIS:

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GjG|^O^vPy,}W!u+.iZ@=oDlV.*y8=y;&<$@-H%uZP}ATeuXwf;Uv*;o3&=7n+|v');
define('SECURE_AUTH_KEY',  'h|1nrx7*yfuFTWsj:XK;)``ED<fZzrOE8k5k,k6t8sEphix] |iVW`vm d6Jqav?');
define('LOGGED_IN_KEY',    '+/E#5J[uRXEpd@sm]MJp0t!0=ojd@p>w-Z+E^AlR,X>*fPFR_p%DDL[P(;=DgE-&');
define('NONCE_KEY',        'C;,oSv:jZoaxFygcNZkb66Aj)AJnv-e3H}}AaI$5[s9n$-}c08J8,V/P|)=)(*3a');
define('AUTH_SALT',        '{^0Bx{e(nBO.2B=]PU0.LTkqR*+sf32a_.0S8+V+ % ygNdw$[%{L`:co43`l(sA');
define('SECURE_AUTH_SALT', '5|Ck)F^//?9(zAw7{<hoAI-[Xzsik9*e}8d3s*P[B]e/l;?KwncA9u!c,d-;u#5%');
define('LOGGED_IN_SALT',   'QGnpawC4 X,-Bw$ck*J.I9P54DqKnJb/r<VuLBHBv<aav5&s9+-sBFcG0Q+<$(}D');
define('NONCE_SALT',       'CzEu5b6|X#+<dY|EiRv|#c~no+B0LuRs :U+|g-1dE_-c]Qw ^KjhW ig{xz_r4/');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
