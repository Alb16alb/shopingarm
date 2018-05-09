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
define('DB_NAME', 'shopingarm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'HoVAX ns?R54LjtDM7[Qq(,*99H<T8x]suMPhaKHYxp_;c2&8sc]riNV[fJ{1iXv');
define('SECURE_AUTH_KEY',  '[}y#3<%jz6I`<gV$71C@<@)A]+g=AN*cinErw(Ko>e,lVk:49OD@`hP:a0HgsC 1');
define('LOGGED_IN_KEY',    '|XdLGQmDm,bRnU+8Tb(;q#{bn,#2+srD6j&V&wPl>7hsyHKW<cn|CGROR#<K0ADY');
define('NONCE_KEY',        'QiBP21emb6P/xI)<.k4a@.5L[/SVo6_=e{v}yx3%IUY%e mN!s&IO|<-9ua~D{~E');
define('AUTH_SALT',        '+zPG[]u_eP*6+ITA&+b!L 0F`>i48D!qYJbFAGj<2B%I>O.Nfs`>4Rd! B`A{Y~r');
define('SECURE_AUTH_SALT', 'KBRTC,%o*l7vm=&d8TmB:6U_WA8$CtDwUB-~`xXrbz~7~/jQ/x>Y|+#j]G1l*U]I');
define('LOGGED_IN_SALT',   'jxI/u&^w%MA/mqrQl/]vo;=!(OV,A]$rO5/3b.~4iG[^Q4a1%yps%}Jc}nG|# Gz');
define('NONCE_SALT',       'Ka]U]s+,sLg%PDJQ0Pep{TidThYc:x$e=rgpJ+w_Iqo:207~Z/,G{Cy a;{qmI7F');

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
