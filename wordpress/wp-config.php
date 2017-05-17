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
define('DB_NAME', 'Wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'f+C(lL8.zJ0*tUg5ydzLlbSBXVGjGnTFfE?|,=AIFzs6d5z[Q=RoqxwE0-_EI37S');
define('SECURE_AUTH_KEY',  'eL{*,zmU9PV7lPRV2aZ&PdVkO B=}S>KRIUDfQLp9AX^s;3S7B,ABl`Hg.@7H/B+');
define('LOGGED_IN_KEY',    '2b96n%PbK<qIIM)E<M<G)WkB4xhlunc_kG>Gd}HL+oY!(XtqJrFlobN:eF6CI)7o');
define('NONCE_KEY',        'nWDPH/z DWXLR]O`1/a*i;0nVeq$_e$MKU4i;4ysz*:#$u;7+x[kN?>Gy~z*!MJZ');
define('AUTH_SALT',        'Y{U`,:F,UEibl~N68wVTU4{d%)%EKSEn.;xzb>adqkVQ `(n@K0>vhg=CIoN,UNV');
define('SECURE_AUTH_SALT', '~[$mov?IFq,qq|Dr=hj0Hn721ohTs_z{A}qIPCx#)]i<7]kIhWTxHOlg(1_Mb_e3');
define('LOGGED_IN_SALT',   '5HO~N_Gm.22b!8C)BQH4q?AeWZNA?E,])7YV*EkcJQ(&wSrGm{[syogFtO:W@ljC');
define('NONCE_SALT',       'feB9RH!ZZ^2V?P*1iyQUMi86.,nLRkhGYE<`Gm`N@(Mhw/cEf~.J>z***c_zw./j');

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
