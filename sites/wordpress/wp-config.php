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
define('DB_NAME', 'wordpress_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'ZI6StK.O6-U<1rwi18=5-g@+u@3bJ4-}Uhwo^eE:%4C$I8K(<7J YD`AV%s/R;Oh');
define('SECURE_AUTH_KEY',  'V6u*nr<:7)?DL#d5fqA!Tqc@Alep1$rAZefejKdn&}o(Ck)-2[Lle4($g#z5[HLi');
define('LOGGED_IN_KEY',    'A l//-(C1Fzy+aF?`0*fpG_-sK}o/$4lLP5Nfy}~]-WdDYr919-0eK,q|y-L[;6W');
define('NONCE_KEY',        'y2vaaG4gs+|t%/.VkR5-M9b9<@MW9|xvL:w]eSwx$Fr>![^-b&{;Fo.cV+v^O8sY');
define('AUTH_SALT',        'xI1tEqvl^5xppiU)(^Qm#$9~*<Zq/:+.3@i( cS@,!P}L*Y_ff[j&zG}c57)2paj');
define('SECURE_AUTH_SALT', 'qd!4wK+HIUvR-[a8=jEavbWj?`RYNT=2gG^qA?!3f kps2WCJ|iL0+9<i}s1(T!f');
define('LOGGED_IN_SALT',   '|!t1Tsr(Y*;mElY=$5:&&!:R|g9he8aH=+mwPHV-S!4Mw|%MG6n|:j?Y(^!}%E+@');
define('NONCE_SALT',       'ElGn[>[G!!ai^wm(Ip7-@Md&46ebj@StC{/(GOO% ZIpDStTg[7D||L_mY^#e|og');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wytrx_';
define( 'WP_POST_REVISIONS', 10 );

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
