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
define( 'DB_NAME', 'db_student_manager' );

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
define( 'AUTH_KEY',         '5U~nlNEb,K)<w2 7;7-W1!1N0&-I:=$zIn&-FrNw.kGgp2e{Ik36l4-3?3:?$g^m' );
define( 'SECURE_AUTH_KEY',  '|9sTF9LH9@9n~?&ez+$&*CFVGiR.u7p13YZ3uSA<Gxi^[M}$7^1I&BHY&H<.;eK5' );
define( 'LOGGED_IN_KEY',    '!COidR2tzx6z>/@1vJ@v_J1x[6G^7P}+7wq-Nts.w{crG4;&Es4?It4]W8u^e<Yn' );
define( 'NONCE_KEY',        'U|f;a64PL>vFsP|,A}O-}*mx`;!sT*dn?#3G9{EFJ<OYLYN`W3Y-./V<qZ+;/{-:' );
define( 'AUTH_SALT',        '0Dp6@h5lwZc$HPow;v8<V|elcsK=f&wl`Dm<BgxDZ#_zQ5WUgT?u`]/M+Iy{sZ*+' );
define( 'SECURE_AUTH_SALT', 'GS!&da8l9Q Im;Bz=/XUeKs)S#^s0RpbFy;St?*yY]uZPqyIaIQL1:R9e`D_={C}' );
define( 'LOGGED_IN_SALT',   '#$f1D6S[V[gm_ELAed8:q<&[DMt1`eC],W<wu/p1x1$x{~_}XQBiT>S04va`N<_U' );
define( 'NONCE_SALT',       'c+rm{e>8%Ypb2p_ok+mB7K>AXY|Z,B2MA]!d~MW/@Bsq8sawn|V7y%|RUd6NX.vc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
