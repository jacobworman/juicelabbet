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
define('DB_PASSWORD', 'bf892d0dc6f3e07b583c385546e4214ac0274de856d7987f');

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
define('AUTH_KEY',         '_WoYNKt&%EcBf27se+em8#QspwtQj64~>v4p<1d_Y}^+Wfe}%=,1~rzpg9OE*G4D');
define('SECURE_AUTH_KEY',  '!/6yY&CpVh)&jb}oAN-ma_SE6OS,Ws@.1TfMoB8KUvND3vWGnmuuHilB(*S5vhZV');
define('LOGGED_IN_KEY',    '`r5d4<T?Y.m+h[CZkri?2 ZCZU)[lJ?qoS[4)mM)!PSkmJ{K<g=5ePOL+<q^$uOT');
define('NONCE_KEY',        'RKB(;Ivm>w$8`o22oO!X]a+-1ls#5A:-e:3l5Oy7,DRO}s([LLaK^RNsG@)l_#<-');
define('AUTH_SALT',        '!GwR@IU7E.m/)6-HWw&>8i`wM:ybY17YhXUFbY1&D~{-$gt{!Hl]]2L+|C+QbT;N');
define('SECURE_AUTH_SALT', '~p/m1(Jn]0}?aW*9mfA>F0>,mXw!~L<aO`=9* 7[tSSm,99 n%&X/X=|`Hd+P/Q-');
define('LOGGED_IN_SALT',   'yo#=(,/%,3E5QPF>S-!Bvm5fU23*@F$>p_T/4I:LEBBK:2y#TMOwE){) }!1|X_M');
define('NONCE_SALT',       'A8_zAP]SB+]r56HHM@w&-tLkH~[p4tuhv+N8{?]FssmwF|(yauFF,Y?!J;FM,,<G');

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
