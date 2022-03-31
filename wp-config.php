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
define('DB_NAME', 'kantipurtra_db');

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
define('AUTH_KEY',         'u/jTn8lb[^pk_Az&u6v6>uiKv,7Z-#I4>d,bwPmZ]]boHEGF4H8Ynp@*UYj%)Dg[');
define('SECURE_AUTH_KEY',  ':V.D4M4fbT>1BX4>~bi]u(vJw3uNVA<-:JTe0VzB#J*?CphMFlbuA`Qea(j}O|04');
define('LOGGED_IN_KEY',    'T,B|rr[R^!ly4Hw.BPv:Pj.Le(Q=fdNr?9~2wcZQy=k`w%Z~@#hQgMl{N9QOSRUC');
define('NONCE_KEY',        '26j/4(m? lv_0VDwd(Zee7o8k<tmU#>0W4<H6]@20J=1-C.VZ;Sdo#B>1eSe-4>-');
define('AUTH_SALT',        ')a*?su`<IDJ#E&i!{!NQ ;O6rb,.UU5E##}:1N&qqlsYS{^+f_Mn37%l9?OdTgmj');
define('SECURE_AUTH_SALT', 't(gE:46Bp#`jEbgHVDVyU}PK@$<>NN)5)!astDx,}u[@dM9Q8O`0.4/byf ff+j@');
define('LOGGED_IN_SALT',   '$`@6RuO3]3K};W@Zh3jzAtl |f%Q0A;QUh$#c~^N4-WQ<RABLYk{vE K],ij2wc)');
define('NONCE_SALT',       'r A9Z6_ArTPH6^>O}N[YN;aUpF644u8:rMN;Un+9R`#^dG9t=>C604w&{pfY<-.7');

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
