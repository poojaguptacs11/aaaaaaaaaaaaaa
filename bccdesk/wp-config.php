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
define('DB_NAME', 'bccdesknew');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '/2FH}n7`k(VdN)*!oa/=nxpdc:!5GXrX)u>9)(qd2&A8c=iJwr6d0M|!yeff!f`S');
define('SECURE_AUTH_KEY',  'aY<3^|peDLREmU4]6o0bD$n(KxoLhzn8.!sUCsBnee-/PWy{3!>7>&__#!Dhc-N!');
define('LOGGED_IN_KEY',    'QQ@=&zF$kr^nRwTdBcYKNAVhBQZ/k?:)5yY2VFi6P8K5-`UT=Fwi2-/8IrK%)=;5');
define('NONCE_KEY',        'eQ+T0t?{m7[wcx%3(?|~1jX@<N(p){vc% EV9{ta0],HBU)_e(WPFJE0<M+jdO+J');
define('AUTH_SALT',        'D?Q}z7L.I3pm:9i7lHUY)WSqH20_W.*O!kb.]i>MbCxDPJ`0-3K %ZCSHt%pL6Jq');
define('SECURE_AUTH_SALT', 'm{FkjBuG>2(n0kc>#;n7]LYO-0qR94gU-.`56+&:9mfAi@!s%Z7>|_Uvija]hilw');
define('LOGGED_IN_SALT',   'kh}!/gRaIOU;_+:I1N|Nw`exJ=A$rOx1okM.gdsahWSc^GG>2{qo)P.@lNw^Vy$[');
define('NONCE_SALT',       '10%D|eDvxBf^+tCpzsRV7vxQ|A_vDtm9J&n|4nlo-n!uZ;>bIvNeKU4Vs.qD&|)g');

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
