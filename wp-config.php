<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heatpump' );

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
define( 'AUTH_KEY',         '_E`O`mwruN*B-18CpJRJj^TT|teL6_G$~]CP-+&(HC^8z49Y4_}]{WjL1=s}SX,c' );
define( 'SECURE_AUTH_KEY',  'ry4^mWUqw>6*b@KWOJk]KuI?u_h{-xJyqX7z=:GY!y4a Tx$],htJVH@j`mJ[!x6' );
define( 'LOGGED_IN_KEY',    '?Lw+Y-O*2bJg2Ohuc)6xnfb-1,L%TV14I]w(80D>CQrZnQ3xI!91X*2?1I<WFzYW' );
define( 'NONCE_KEY',        'f5qHX23>N)P9>ZD55PI^mGI,3<Gz*{$q0l4PToOUx]h3OePc{!FNX>5Pf:gnp/YG' );
define( 'AUTH_SALT',        'u&GJhyjr#v!qR]_VUL[`eLzd0.kVS[{LCqB$k_f`Y=7<*[Q:n_p k,JkINGfSRz5' );
define( 'SECURE_AUTH_SALT', 'w`_6-hD(6?jfl6| LXu }XQ@:b=8&5Lsf,:#akGFYb7C5zR-Y]}pEc>@$rPH^~}q' );
define( 'LOGGED_IN_SALT',   '1DRhiDd;A*@1x4-uKSZ9}(>or_qR8{z@.W0~c.0Ctf{M Hn$OM(8p8&Qwe[@([4f' );
define( 'NONCE_SALT',       'pxl+G++M5I8_-pg;- 3MI?6UmP%/Dd3%gM%$G_>npC25yLF;mDacIE`nCQMP.EO&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
