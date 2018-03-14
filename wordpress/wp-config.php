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
define('DB_NAME', 'school _managment');

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
define('AUTH_KEY',         '^WHPu0)i%;&dE3B.as[[SO@-6@^l@{~;*Ut_7H|n,*+f::W(D~?de7CYX?[:zju!');
define('SECURE_AUTH_KEY',  'b/()n38Yt:`9|8Wmgc/jZVTB}i5`tdsKZW?6)N5b&4$S&h930Hn-WHk?x];<#>]{');
define('LOGGED_IN_KEY',    's%D KTlSrZ[l+`&7,s5qbC|)(PI2}1CnZv]KL*,UhJ*THKbsXZ+qv(Q=gE-|6uNh');
define('NONCE_KEY',        'D-*.>C8%?!-u_{N}a}yB+Sz)W9~+@,&>X&&quY[8/`6vy0U-95P5KT4Z&?wCqJ%?');
define('AUTH_SALT',        'Y>k ma-z-/Eo2,4hWVIU^eiA&iLAac[SFoX)%7%cVyZ(_3D)(uc*Lg3[PH^Z^+?8');
define('SECURE_AUTH_SALT', 'uGgv/65h,&Mu-&;3dBQ,q1;y?$A^mE#,yr_jPYIevKcL<&{UBd(Z8v!GL8p{cCDA');
define('LOGGED_IN_SALT',   'DDr_=i<D~%saD/u5)plF0yQSML>*L!<f.;~#z%(l+wMuF3E,`Uc=.8E0VM<`DB/d');
define('NONCE_SALT',       ']P3%|E9JdbzZ&yN,;^RD)yXY.;?=c5E)RIVqZTMGN)0_yPD l7hvkVWY@K|+^-ls');

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
