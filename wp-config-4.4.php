<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'carlosfierroworks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '8jsgfAGljY');

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
define('AUTH_KEY',         'S+j^h BlZPqU?d5.9?=|ZL$V2:U,6Uu+KjSKb#|R;Gun0hh|kSR`,pBy7p-5},yT');
define('SECURE_AUTH_KEY',  'wx]G`+4{I-fumoMvQ?RTm|TEq35H4ml.AiEo0Uu88vs8k4@^XFr-BeNMTo!k|k$w');
define('LOGGED_IN_KEY',    '5l_)L?~Hd/-,6uN~>c:4^}zNvU;}L&ZtlXDGT9wo/gL+*2fPxgdt`J0Mbvs_}J>)');
define('NONCE_KEY',        '!=q@I8+H[W!%o%mXldjAsgr])bb=j>xLsY|NCvj4KU)9^@?EL6a1a9!s*`M~@Y1u');
define('AUTH_SALT',        ' Y{93XgFu WgMQT<M>~{<Nx>}[fLx48*_ okb(s1s(J *?b^)xdwrP!%7s|R}oo^');
define('SECURE_AUTH_SALT', 'R<rE!Cs.Ch(@b:gl=%|0PT^HE.jO|c7IpB&?)./]FmL-uytrE.&.lx+WhjPj|N3;');
define('LOGGED_IN_SALT',   'sg12#z5,@NWB@C2O-(dq+Q~%[fFf8K>9f;e]Z)3y/9/:>Xzekp3dSEDA/*2&=,VU');
define('NONCE_SALT',       'qlUy,*CN,Kc659=v^4<Hut=QQqeii;Ki9iX>{@5mBdW58nm:@aPqB;SuDYig6C|-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
