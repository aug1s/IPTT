<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u679356708_Ly9mU' );

/** Database username */
define( 'DB_USER', 'u679356708_CBJ44' );

/** Database password */
define( 'DB_PASSWORD', '2eGzTf8hVy' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6?T[OdcB}vZLRx!csyOG;HIX,iuOK5:rQ@]Tt&o`{<,:r>+|%f-/nW5S{IoF1rdj' );
define( 'SECURE_AUTH_KEY',   'q#%}KnHf}&c~A+n/yWV9,Fj^vk@!:Q!BoUgi<mz9;?tY.6n` E#[#XPrUwXuu_^B' );
define( 'LOGGED_IN_KEY',     'qJ_RzdAbKg<#_&|FF]A-ETTq)hSfNw.<xNSQ><mz^O0nH9CRmd;}eLY`w^LWv+&~' );
define( 'NONCE_KEY',         '$xWY:p{*F-=,]V/4CRV.`{5hh|+K([$PhrGj,N+lt,~Y&fhT[K^<DU(Rkfenq7nn' );
define( 'AUTH_SALT',         'WrnX #?P{=g U:C|H>=M{)k riPbCwOX@-aMMjJ0Qk395Nh:UvrsW{jM+t0t:I=A' );
define( 'SECURE_AUTH_SALT',  'vsXGc4{<)-_15ii]EVu2vkRa_3sGTke y/iOnb|5zR{k|YJ:~!&#J^o$hRb^oB@*' );
define( 'LOGGED_IN_SALT',    'rBR*5EVon5./%|tnAgb|2`zdnA1q-&]D@^:i]rU`jD9$Ekgc|{G49D3?UvTa!Uan' );
define( 'NONCE_SALT',        '+oe^CS]k,LFK$IZdK2<EIn7Z3rdjnLv(}/_;Q7xKv,;2~bPixBHj9AWQ~zZ^WziG' );
define( 'WP_CACHE_KEY_SALT', '>E|gYWB^>=a]mI|FSoi-zi-<$9LlO!z_OeRnkxp<i$|NiNS D]uxc9Sxv[$?zZvA' );


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



define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
