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
define('DB_NAME', 'sharmila-farooqi');

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
define('AUTH_KEY',         '@VDfg1Zb^tW0d:3]^3v^g&*^$A<~3rNLVj:bWy4eM9ALH)>E|BUD9Vem1jt?<m?#');
define('SECURE_AUTH_KEY',  'VTEwAJyt&m2-2oNKc8DFpt9mNXu<5;I(e7PK9ajxAy}p5#Bq0%9^0W}(b2tOYu.{');
define('LOGGED_IN_KEY',    '``UiE].`oA5o`2Lo)N|`6Rz<1z%*J^V(=(CYwP1agkI|:NSTp}3S>b~ a(W@FrT#');
define('NONCE_KEY',        '<*H76j7ZXM!CW/F(ND2ja5,EUeQ(8p9R(H-{8H.hihv^&YHz58aIxpoujg1XQ=T>');
define('AUTH_SALT',        'hCP*>>O8%HHk>GkTQZ=j~#Ml(FH&-->f+Vj6?/CAebeKta#|GIe[[ii)sApK]+A@');
define('SECURE_AUTH_SALT', '%vcqN|)n _HN}x<>>K KqjQ }}<1Zl:dxd.}J?Ig&N/OVHKaBQ-evJi;C!AB#(4.');
define('LOGGED_IN_SALT',   '[DG%^`L=07Y5G>?ul@XW7c%V-;Z[IOq!.iIabJ0XTK{JX,olrIH.{p3}UXJJK.ZC');
define('NONCE_SALT',       'yvcqc5cS%{k87~K 9jj0akv .<[v6Sh5(hr@,fGuN5J!FtkIa.!A]wx+yLwk?!& ');

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
