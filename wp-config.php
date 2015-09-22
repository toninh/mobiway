<?php
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
define('DB_NAME', 'mobiway');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&h;=Ec-B1j?d?R,n]RA [VrtTobx|J++iWF:hP+Npd!:0XGn|U)cqCgevHli!z:G');
define('SECURE_AUTH_KEY',  '$c3-*a@v|<g`Nwn@hfe@-:)}wc~-3WM~US;|:zVC97-.UXXCh_P<d@DIk?ACa@/r');
define('LOGGED_IN_KEY',    '.Us?utjZ^PP@FG+P7w(A9w5fOvgy`&u~$AGPLrwRF1Z=7p%No}~(E ,2oXE#+u}s');
define('NONCE_KEY',        'Ue5`<%~6JoOPa;5aDEwVR7pR+UlnCtVUoEyKmNPE}$jX`yG,faD0g#Q|1I7Uvv?G');
define('AUTH_SALT',        '5.K]nA+$xnj{l/jJJ&[VAb&UFuf_|G.q:({nab]m^.vlH*cwc%WZ_G*nF7`R+1 T');
define('SECURE_AUTH_SALT', '3u|[KsT9S5U@kZ%Ie7qJc8Y/[6&h|U6?]MV,h+|ZD{|8$nkq.t]xY1zq#m0]H3@N');
define('LOGGED_IN_SALT',   '-;|mwpTGC67`s4>:+MdnqWhZ/jE3zgb3(d:gCX-k8mh|]fD3x}+2a 4Bj.*s+{Z4');
define('NONCE_SALT',       '%c:_EUu?orj:d59 SH|W]|7SIAw6h$;x<0-(uD&#R}%Dwxk].%+9iP!4o[q-.`YR');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
