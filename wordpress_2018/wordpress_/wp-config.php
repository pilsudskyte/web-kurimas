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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '%@=KB>tJ<}3ol|l`Mv= q^Yo`N3#$bz2~>(% uwF+0sRN033? llyIHt{9RXCu*I');
define('SECURE_AUTH_KEY',  'JT7LU/u[g~:= Sk 9o-:<*NJws(HZ8=eT^%4xHjoL>F#^)jv7XsN(X.fxiMI>{p!');
define('LOGGED_IN_KEY',    'HbpQ6>c9||YNFz2k$ZH#YFS1<4p9}zK&y0{DpU!,L~9]jN.}HBZ9iyxaXnp^J]<?');
define('NONCE_KEY',        'i&2k@9Yp1)-vnKD2<S;_/nCAzRMG1anW/.L2cF`sB^n+e+z^Y}yqd+!RsfKvN|ou');
define('AUTH_SALT',        'kq.{(oneTDuYS$:#}ntXdE){AAq+!zup2W[x]]4d8sd%_r+m*V e2s!:epISZMuD');
define('SECURE_AUTH_SALT', '0Uz(WSz?)S$$KSKIQ~2]XQL94Q8gC9LyU1pEZjM6bQ~P!ltf7HyyN2|4Egb+kO,k');
define('LOGGED_IN_SALT',   'wDRc=n20&8ztaUe~9dtF0M15[[t3d./70C>E*X- (tC|FlEw8pF+fA+7!%:GS7(|');
define('NONCE_SALT',       'noT6]0<k1B@}+jp&y<r^_eqmaI~WB4?T pK_5u=x3e.}B1WmO(h=`TbN$6OaD=yi');

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
