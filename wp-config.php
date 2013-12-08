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
define('DB_NAME', 'ordina-developers-community');

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
define('AUTH_KEY',         '0*:gke;9iRq#Gh7s$[E+?]l;bwTP@ax`OlK!L)B/lPKqsE`X%+aFAd?g`Rfz/pZ]');
define('SECURE_AUTH_KEY',  '2HJg]7a_a;mS|m-u#iHH %D(){0$.1)9;2}`%ZfIARYtF/AXH01^8Np}uCD]<UQ9');
define('LOGGED_IN_KEY',    '=92WBcY9-`d- %|o3pG4=7w]vNYGx{J+SWKLKS4LhPOkX5gstI?Mi6{pPFj|gJ/c');
define('NONCE_KEY',        'cL3SW$]9%d;!-SYhX/|A^`_up3fas{$>NxOok0ftBtI@KbxtLqe{38(D5{dP5nL@');
define('AUTH_SALT',        'QgUS|[J%f9Ol2U>y,o6-W6,7;XL6%tMN: cu+n(Iiq5G<VK1Cb[Q~$XHrm{D9X|@');
define('SECURE_AUTH_SALT', 'A;7Fme&T^?^TFS~Y{6zJ)YQo6,rzUD=<.h:p-Z>692gahG1Un<V}.2r[@m{rGmm3');
define('LOGGED_IN_SALT',   'qErP9{~>^E,~6S_orZo+Gc-H_hWt()T]E+H ]9lxu(I:sy;$ymYuF!8Y,+3)aKN|');
define('NONCE_SALT',       'a~U$#vI>=vw3tRK-E%OXdBT$bu$Oh?`4B<TB$x|d<eUgt3<z} ]ut>+jGPuzI,-f');

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
define('WPLANG', 'nl_NL');

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
