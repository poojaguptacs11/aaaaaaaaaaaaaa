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
define('DB_NAME', 'WPS');

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
define('AUTH_KEY',         'o%{e>yXV *YG>vWS+)3L@3<?Z/5Zp#-|#hkb4Y2,yJ~_Y,/G54yr]r(a>OrI0}4Y');
define('SECURE_AUTH_KEY',  '64f4o;JJ*^3IB`k/bSh~VT_8%CYa_[Mjt7H 6 +J2i{`;Qk+U Xa)uW4E;`Zq&xY');
define('LOGGED_IN_KEY',    'D:F8+SL#N%uDV.=n|XB,ELeoI?h[m^kci&UuL:dqEC#j73^|cZ6EOl~.i<$#XPSv');
define('NONCE_KEY',        'k,mlB;+~/T`izMNu4l[=n*?BZ(H<7IUS{4(KwfJRT{{NP] kY(|tczay}hy0?`TL');
define('AUTH_SALT',        '33vx]hLJ)=6$Cqc>/MEVp.f{SVV[@weCWjIME|qQ9MSsl-;&Qh},uk|iL1Su.^={');
define('SECURE_AUTH_SALT', 'J48~r*rf*Js=+Y+i!.p37Ia)t;[|2/!n%Z~95C&L4=Ro?H ho<x*eKy)&:^-@*nZ');
define('LOGGED_IN_SALT',   '(yGZ ?gyF.oYZg|t^yrb$?VSKhtbl]Nykx1hqA|]@ZKaS2R!M(_VplM#+YuNi{w!');
define('NONCE_SALT',       '%m>i<W!*2/JT]v?q_Qzi{zmv%L0`8;EBE8@hM$0XymcG*j::pLw6gN:mxN+3aS^w');

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
