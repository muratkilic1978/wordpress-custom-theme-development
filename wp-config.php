<?php
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

define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-custom-theme');

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
define('AUTH_KEY',         'KNg(X>hGkN6;u#s}uRfU9woxQ(BWgZC7cbT@G7aC(uJ`PUZ4GywyGCgEo0y1-2o6');
define('SECURE_AUTH_KEY',  '#{mBa.mPs~v06r)#jLinWx|?A#>(BG-uG@ zN|e2n;X-s`aI7XEfpt3i/N9Y;3J|');
define('LOGGED_IN_KEY',    '?.ah+PY5&Of$w;fi^J>.L5K6C-&cyV<ubj@pZ.7p@jlTt]+dDsJ({VzGg;e%xU7v');
define('NONCE_KEY',        'xr/CAkm+ZbEnm%%Jn2E1zw18$ p4W<|wuH=3f$3*]({<axgs)UGL7</wa:0nsR`H');
define('AUTH_SALT',        '*c8B.<_gh[Ige6bVFpHY~|5QjDm*ywvp7BW3sAY6JTV=b0v+<!-Z;*HPZWGqwjmJ');
define('SECURE_AUTH_SALT', 'e&b5?y7*5ikjFg4(?Y&Z|t!^lX7P-T+5a9C{Vc^Ag3mpPM`DDm|Ldn>MsQpUz|1k');
define('LOGGED_IN_SALT',   '=?)=U>#a65tRY|}7;0^E7z8yQS/fz^.SLas[|k--GPff*p3z#sa K~b,Rcy-^ibg');
define('NONCE_SALT',       'M&kR1AnrTLK~GE;am:]9aki$iUl[}yCn_dw1%HJc|[ob]Ti-6*aX+qW.`[!YWEI#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_custom_theme';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
