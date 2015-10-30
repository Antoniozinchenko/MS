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
define('DB_NAME', 'webdec00_landing');

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
define('AUTH_KEY',         'vX#+t4_,]nuf;|l[.Bs^d_5<-7 va#W9K6E65>7b_x?[F1](5Kv3jM5hC5+ut}3g');
define('SECURE_AUTH_KEY',  'c5gtGFW)$YUs 7>O|`.|=RN[uM.ikz8eej?g&`ym$ |/U#|2Z2>E&).cZ[mRy4f:');
define('LOGGED_IN_KEY',    '{zunW:)*j2r5-IU%*tkY{[rLGRHMMlzRbIkq@,z_ykHw,3`*`W!Y7EL@&I` 9Ewp');
define('NONCE_KEY',        '9Zqp&m4$JtB7T`-@Sp<$,VU;Iw^}>7}y$MU|Vpm+$[3;6<Wb$@r7%Xbxcg!H17n)');
define('AUTH_SALT',        'NoMiEDC2/B3V1XRUl>tC}h{|>%`%_E+4Zq=WgPc{~woC7PfWQIzKxX7/hE1ru?zv');
define('SECURE_AUTH_SALT', '68a;+D. jDb-:t-^CC>E|3N4=9kGhpxNhTCM78k.e>hfjfL!r&(vfPK[:&;lWgTi');
define('LOGGED_IN_SALT',   '  -R[x<jyOHDQ<:8`|fA3)dfztKE}<(6+R{K+|,iPbdK[CszW,(otIh~aOnd|n]-');
define('NONCE_SALT',       '`N$iAAz$EG2)$gbMO,f`FpHq:,WXo^_|/rn+(kP/lr-h&r~?qk5*fjfmJ-7t.EV|');

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
