<?php

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define('DB_NAME', 'dreamwork');

/** MySQL database username */
define('DB_USER', 'dreamwork');

/** MySQL database password */
define('DB_PASSWORD', 'vivexpass1');

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
define('AUTH_KEY',         'mnbouu1cz6iorpvmftztvzxroji4vkdcermb16glpeclb8idekvsjiuz6wi3mfws');
define('SECURE_AUTH_KEY',  'tacfilr3aoofpfr9kgqnmdc65ktuxd8tlzvxjeemeol2kmrnrilceli7baypjnfp');
define('LOGGED_IN_KEY',    'j26ugr9pvygusn6nlj8tt8gwal89k5o4qawhkk8roal3ktvaqbvutzf8udjvsin1');
define('NONCE_KEY',        'rna4n4mw0kuijywci6qp77uewelv9bz6bnbfbxkehom7rrmrc5haofuyrfnti41w');
define('AUTH_SALT',        '1t8fskap5koudfnrjy3nchws6wo5efuikhoczcoqwgwnsbtfbq29vlspf5cxf59z');
define('SECURE_AUTH_SALT', 'fapdbvx3vgvfth15epyndiegysuw5vaeb7rh02onxrqidbakfcdmjjxwjgfryya1');
define('LOGGED_IN_SALT',   'dqgsbnuamrnr7wmybmtx7chgbtt4gtdpopuvvavtufto0ss6pja5trh7fgzktujc');
define('NONCE_SALT',       'semp7gxdlgdg3g3aen6cwjxzrzag2pzaq1ez20xndzk6cdq4r0ekgcg3ajwedujh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
