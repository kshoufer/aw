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
define('DB_NAME', 'aw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7X&KK>j6}cNkvTTq(lOF,;^!K$F3jz<?y([>=z6G+@Bbj-KYbNB8;$eY$o^JyoLG');
define('SECURE_AUTH_KEY',  'f;0B`*oOnU)wx6V~S?#2B%fnWa|,7<kvJMxeYB3&dmH*;(8E|Uqee|wb8X/Y#M1X');
define('LOGGED_IN_KEY',    '&Rv]~ahYVV~<>AU(!%YOWcK&E-D2l~=PG}!=H%*~,&B*;E(._pcLk++J2IZim&6v');
define('NONCE_KEY',        '4 SM=z5oMSDdGAk+AQGUm|86~?g)u|]<W|DpZ:pvZYz`7GAoZ!k|$*BpW)a>BnVM');
define('AUTH_SALT',        'tukN?*L5sE&aVz:GNh)i~|x:t^$]8|}nts42QWm nAS9jSM~W8r.adf9#/,8}Yj2');
define('SECURE_AUTH_SALT', '-d2_6qk9n* Nq =FPI<Kg-NUG%)3ULa1FmszhEHILll1FL@-l/Db8wpe9|8H?ii[');
define('LOGGED_IN_SALT',   '%+6Hh@m,UT8MB[eN9h=1@N]LIJ3l*$jj9E8g/SKfid>~Xg89SS@/v<C4T%w{{qtK');
define('NONCE_SALT',       '<yOk/jIV8Qe%{kM,,)C`^{q<FVMlU7j2z*E6YkpW!n>&E{ljMjXTjJTpo)qP5#=h');

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
