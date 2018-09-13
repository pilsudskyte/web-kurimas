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
define('DB_NAME', 'phpwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '37GDA,Q&p_Gmgk;&oSN#@;2wsDIKNXuB`D,m{-&aV;Q&V<4Lt;P&;D9#R^8ekEEG');
define('SECURE_AUTH_KEY',  'w40z9W+yD?Afrx-Ms7r0}wCSg#Nfz<0l@%TX[Z~~(t9}hf@f)DmjD6aBV)%5+hso');
define('LOGGED_IN_KEY',    '+,DXeD6t.M5IJ;h+DJ%4{4(z[8!^CwlYd09z]|6Q-f 0YOHbQ@~#ud]Y&p6-5]?I');
define('NONCE_KEY',        ')Srtjz-3]`Fe,|!+4?FZXa24?o|(0sU~X]X:Qzn5S]1XUm_t|/b~6#D|+ib=(s~#');
define('AUTH_SALT',        'B,BQHe>=sdW#/+oGr}:9GKPi_gzt!uL|{+`:2%AJ32,^Q.rPp)Y4w_E*T#oRYD$V');
define('SECURE_AUTH_SALT', '-%X<abAGO(NVi8; !nEKa!G!ME7.pqA(hqZcOLPYDe/6k^U&;XK<8OuyK>C-JDtz');
define('LOGGED_IN_SALT',   'T;c$Z)S)gneS}9}~Lu_{H/}~O1+X*Lw;l9^k>Ehm^qU*|(~hE&T^7k>j2mYZ1=|_');
define('NONCE_SALT',       'S[?|Sgt=phU^KhZ~lSl.7:f0;(itx?3gTvqPGr=~bX>!q8)/Rx9HM1-)AUFdl[}b');

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
