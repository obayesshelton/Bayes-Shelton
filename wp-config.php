<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bayes_shelton_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'O1211990!');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'ZdZckyiDqaD2;&$~_%cT|J-WpAH7RP?:w?|J`4D_d$!JN%y(l~N-sprqb}4xHTZm');
define('SECURE_AUTH_KEY',  'S}K,$%6G:q>r,^[S$WY.KAzg5;sc/y9mzQ_x#EV|>7g)UBA|Jo8Tkgl_qsux>rj3');
define('LOGGED_IN_KEY',    '_:p07t,+:u-<M<Ug 2K6gjz>KC:nUwR3_=94/6K!-i@w`5P@6B(Yw>=:_C9:FJkM');
define('NONCE_KEY',        '-Lf@$CTxK;IX~SRBB1vYrkxa,YJ&:w&L$ub#N[{_?fL~m9Ue)W?f1q6GV6Dl+:oU');
define('AUTH_SALT',        'Jk4^jBt{y+)]8)(^(]IdOn*5%qa*A~<5OS9Zj}+c{2}W9y&4eOz|OpCLZ(%=xx_6');
define('SECURE_AUTH_SALT', 'd}PJtW U0cP+1)?{mlr1LG-i`I,7Y*nXfqa/OjWOc1rTw{D/C<<4l-q*M/b+[5d,');
define('LOGGED_IN_SALT',   'UfE/+h(# s~g-?h?YCyui/i4<+Qg[f-$/c?cUm|8 Fzg=@{JWm-qrH5ygfD`FjY<');
define('NONCE_SALT',       '_8)W#Iw.&Y=wUly]d]elUB[JaxoKb<kqjn<1d+z?*GtF&HW;%#xCqz+19gPWdcOC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
