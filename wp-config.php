<?php
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
define( 'DB_NAME', 'wordpress_ecommerce' );

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
define( 'AUTH_KEY',         'I-knj:+iA,kmYlb^!_>SXTyQ!!`WI&wO.kf>+UIGmhxN*t[-F|xbP:yJj_sJ*CVL' );
define( 'SECURE_AUTH_KEY',  '7VfLgM^`p)^Ar(GW8u39il|R07wI@d?vcDg-+_WEDjB5WY=wFVAgM_=]U_qh2P*y' );
define( 'LOGGED_IN_KEY',    'IZw|%!Q,itg`40Qci-9H0r[Vrd~<Dh/t>przmX6?`)gWw~,;etphQ(*PZ?/|Y^2b' );
define( 'NONCE_KEY',        '|O3n|v#{A,[=!bch>cYZa^+!^Y7dlv}nIqrrcT=O-I}:,1,HnyExy]b!>ni3?h0_' );
define( 'AUTH_SALT',        'ez)X~y}XeRm*?tUt8D`hK{]1/XU9>lm~,JN$&w?y&&o3r;nup/de,)W; TthiiQh' );
define( 'SECURE_AUTH_SALT', '{bc0EPL-BxC XSl-Lv3?^/^uuc..=;ebn#D:KB;c/QfFu[y,O(pz8@mnq2>jQ;-u' );
define( 'LOGGED_IN_SALT',   '^XiD.oQ?cV-TSz@{wv[*$Kd?ueONn.l1xqVe|cs9c@[>7bu!t)+U!ge;M ^Z9Hlu' );
define( 'NONCE_SALT',       '3_ZUV?n7<( 3e:/~*h&90l,I8Qh5u_}@q4u+QL4_b]L1L<iA5X7Vl5&/_.<6e/LJ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
