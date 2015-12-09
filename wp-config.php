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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'united_nations');

/** MySQL database username */
define('DB_USER', 'diegopalma');

/** MySQL database password */
define('DB_PASSWORD', '28Djuliowp');

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
define('AUTH_KEY',         '|6y n-] wrLckcLx]9e7.bzL [|n~;m7$>PrZdpaDo6;VH1!j|00uZjmTshum|WL');
define('SECURE_AUTH_KEY',  'K5_x~P1qjpj`E}<)gbk_+JXa9D (5pkIG6N,Fz{IY q%7v5{5{bu36!1?.6rYp-r');
define('LOGGED_IN_KEY',    'W2+^|+~Ld>2UCruy8K=K(+gT|}dpU-hN<o>.z-FBA59o128P!a6eYV#W*K|`)&;x');
define('NONCE_KEY',        ').Za ?~)pX+E&KBZ>z!N*VFsnzobc78vAUZ][ZX|m]X,; _dHe-p:TD~WEvz5}z)');
define('AUTH_SALT',        'D](nN!gbHR+daSvreE)-.[bcH!cv&=^Z.(3lIK-IBTmvLL t0F|N_9NMLg%ExE1j');
define('SECURE_AUTH_SALT', 'W;Rb[Q:r/UJ(k+F/:@&zA3BvvW?[1;tFU>`LAiO~hC(cAs-+GWN ?Oh?t5cVhBF-');
define('LOGGED_IN_SALT',   'P<|jGGamn+7F=aif _ghE:Ys9)&BmIx.-zT+3b@s?Q Qi@FT1QP4QKzS|x20-+JC');
define('NONCE_SALT',       '+IK+0~mm6/-))?/r}8O8S0K6faE,%sdA<]YPcpFx*zv2Ve*;d:paw&](;3[:^PN%');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
