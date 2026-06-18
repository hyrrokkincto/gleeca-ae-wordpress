<?php
/** Enable W3 Total Cache */
define('WP_CACHE', false); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gleeca_db_ae' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%-C]qXT4(-*Pj;LB%w(qJ]e-LP3wmXv3P_9+=EId Da:dFWmu1{O8Q]1&3MZH]H#');
define('SECURE_AUTH_KEY',  'Y42c;#<ySMY~{SYQ% 1^C [$I-t1&An`4p3Wbo>5|$e qSriEit1EUzH%xE|S)4z');
define('LOGGED_IN_KEY',    '-n@IyY-QA8Nv~VI|4{ 1b]o_--=Fx#JA2.s+TNy6YMS]x!Q6%-nJp@i|Y.L1*kJP');
define('NONCE_KEY',        '2JRWEKNu6,4TWO[WkeKC~=gK8=b,f.P-LsnRa]P _]Y>iN$Pl3<!GNX/7f-1PJf#');
define('AUTH_SALT',        ':1-{FVHvb%Q<F6Yc;gDke8%C_U-uj 9m[-.={F=5%F*G4RcKUZkE2ZOQwr&~hGK.');
define('SECURE_AUTH_SALT', 'y5gDFD{E4] <D[k|}Aj5:a8Vc$hr9UxlCkDAIRU!:,m$JSwrLJL7>+ tc6aYW.L}');
define('LOGGED_IN_SALT',   'N=(niq[LVP02Mo:=h||RZJe7zRk7}HV%^rZGI53 SleNz]AvpG`h@oSoMMghDC.a');
define('NONCE_SALT',       '+tYM?902Ju~KNR0T^a1*Od[NK*r:~jx<Y|eV%?#T38+,zVg6LP?9jzc4}[[v?7Wf');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gl_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '256M');
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */

// SSL configuration for Cloudflare
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
#@ini_set( 'upload_max_filesize' , '10M' );
#@ini_set( 'post_max_size', '10M');
#@ini_set( 'memory_limit', '256M' );
#@ini_set( 'max_execution_time', '300' );
#@ini_set( 'max_input_time', '300' );
?>