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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XRsoMUR0y^GOlPTTDib,lIl@RE/joq*TyHX*|CCzk_lsw4;hK-<0G-y=q{HoMhz3' );
define( 'SECURE_AUTH_KEY',  'WD9[:]/qzt2unKH]U.OdQo&(D&wQrX3Do{{Sk7@Y_Sny}=DDW4`Wx&E? !Fx5/)%' );
define( 'LOGGED_IN_KEY',    'eb`]x8:Zl`(9mJEV&:9n:<T8@_O(|*H;M-f?oA=G2Rm6-oIg?Spdn{4t=P5Qw0|k' );
define( 'NONCE_KEY',        '*LtLKFp{|)@7.m6IXRN*7;Jf$>|:7*v1_MAR%v}o6F6mQ+`=Ul*^!(wAJn1$a+[m' );
define( 'AUTH_SALT',        ',![S/YMm~{ZJ9DbR?:i_h+R?PJ%K,[`D~iby(xp<R=nZm4Vm+S>R(^Dv(7 c?l;|' );
define( 'SECURE_AUTH_SALT', '_Hl-$o%S6xQ^$-WA+1rY5uI~j`[GqxlyH6A.I=<&D~SvbP<)<9])9+6?V cey8/z' );
define( 'LOGGED_IN_SALT',   ';q<x.2OFJ;Y8^*pCFl(WDOv~;_@4oeI%)i]k5+P1EnD(5uem=s#)#=_I@r<pMcYq' );
define( 'NONCE_SALT',       'vpb$tq?]CA$YCxe=*P@mv=gyEMw}`k:g8Hwl 4c^strgzHaXE_d15pxgO=KiQ<~O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
