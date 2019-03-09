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
define('DB_NAME', 'wigiske');

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

/***additional method */
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@k@;v;2u|_.E_$v!qhO[QkPBx>z2pU=tWeAKD:8|Os$`0P#hod>Y)_WG<f_N{J$<');
define('SECURE_AUTH_KEY',  'J <?>&ME=jrR%V!DQ]*cNtFij0MFLIsm>F<q22kD70+vk&9VB1m3u)/7j8Z>8X#z');
define('LOGGED_IN_KEY',    '=N:UPXuc?hPnU?XiP?&;Nv?w?,QRo,wYM=Psy#CT&>=eWQfPa VEw,uJ6ISzo.?S');
define('NONCE_KEY',        '{B#^_~!V8A_6/R)@0kuDRoVluW$R>9@cu.$^@VZY4*v.G53Be`azpL$36f~Z$x@Y');
define('AUTH_SALT',        'dju1RgCc=;:RGAdl1Yro|oGv#gz>;o)#o$5Lp/g9oQt9bFt(9obfijfPT.MKMj~g');
define('SECURE_AUTH_SALT', 'S_6p-v;_i6THH12>k MS %.7ygx`VtZnX=2k,<_SnN1^C{20RdTn^r4iis54jlO0');
define('LOGGED_IN_SALT',   '>*gt_nj3=~na}[!>_jAU8Z.H^D*HKaDz)&su(YJ,j0cK%/U5oAk2Lt35Msm.wus{');
define('NONCE_SALT',       'YJ*p!c~_.UXx8bN,RxqClL,%<^ei|ae+sDlSr$7&1k@gBlM&K Lu1cDPa.qby+9:');

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
