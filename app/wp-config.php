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

/** Enable this and change as per your URL setting */
/*
if ( getenv('HTTP_HOST') == 'localhost' ) {
	define('WP_HOME', 'http://localhost/example'); 
	define('WP_SITEURL', 'http://localhost/example/app'); 
}else{
	define('WP_HOME', 'http://example.com'); 
	define('WP_SITEURL', 'http://example.com/app'); 
}
*/

define( 'DISABLE_WP_CRON', true ); //Disables auto post publication

define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

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
define('AUTH_KEY',         'pF`L%|_brR50`+)-:]+-OtG/~Q17 {3c073RK@iBtEyCv3{:0TiL:x|hq-*7+&ot');
define('SECURE_AUTH_KEY',  'nqrSk$E|>?%{-yQ=Zbf_Y.(mQ9+S-yaQM=RX*~|wy4!gKFx=4bcuFO%4A?KB]N4~');
define('LOGGED_IN_KEY',    'c39qtdk0uMa-/|K9:+@CO.qODT_%R9I{|%i,`#M*g-OhBQ4z~qPF+Cj5x9YE1.1G');
define('NONCE_KEY',        'op4pntha!5x%+[`VW-;zspi`^Z#+|<Z0C(<!]^=HH{#OEkY|@_Y0M^!p3rI|gfD@');
define('AUTH_SALT',        ';,;+Z:koSU|A/[Y$fFjCo-/9=6JQ3MRQB,8hmHJ/s|)$G_Csj` 93Q+TP3[U]-I|');
define('SECURE_AUTH_SALT', '.xr ~=.HgX?a[`^Yb7{jHrHtM|<0!cy E%dU{.oT3P-/5|$LnJWki!+k&tRD> i[');
define('LOGGED_IN_SALT',   '*e:zrrT>6A :%UzSj`08g)[Jq^z|4(%bKGP4uN2QKMgY_Q+&cBo+{k%8f:vsw+;r');
define('NONCE_SALT',       'gQ_=4kNNjYU<#&@(r7RjxZyq<>=L&ET-7UQE5[b$agu}Iu9-0;Iv.dxp+%aL(dFR');


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
