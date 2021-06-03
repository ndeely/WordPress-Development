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
define( 'DB_NAME', 'i7652661_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i7652661_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'T.66pCSgSCKdwtq45kM99' );

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
define( 'AUTH_KEY',         'N;hs..zBKZ~F[X3AmrzVj>/oiN;ibVJD$+t6ed`ZOXVrB:75SOMvV$z76[R~2lhg' );
define( 'SECURE_AUTH_KEY',  '61N&^$KSINz i1}Q+M`gc2%U(tng3g@Z,*7gWduNqXZBmV%~V!85Ra1zfX:g?dvK' );
define( 'LOGGED_IN_KEY',    'AA% 0Z^=Yjx5mq+Sf?s@l4&I8i}7EdW9BKR-U&AcTE~UX:I/-{4>SAHc$Lsp/J[V' );
define( 'NONCE_KEY',        ';4(F+A<(or>nZW*$aVg&?m$MS:#%HMQ9Eng9ws$MQOP)pjaT!DWN4xTy^s#.9deE' );
define( 'AUTH_SALT',        '?oSo6o$3AU;7f~[n[-8#A/ q(7W.|R~|TH^V%kc|g#hUB^Df(WY%;&LGMfiA}JD&' );
define( 'SECURE_AUTH_SALT', 'el=mAiWKt_n|T`0{!t{R]I^v%|bN4%qr#oqXCjmMbLzASks~~ zc0S`D#k:0,&{l' );
define( 'LOGGED_IN_SALT',   '/J&5T9s*XWD HGkmwt=O|Ae^/dk|hl+2^)fvar>2}MNJYm,39D~RI_+VQ-U86~:a' );
define( 'NONCE_SALT',       'mfDP37up7cq[Z`jq!tb;(O|bc*@%K<VW!EktVoY|0rqWipUAH}NRhuIU<q=Qv<x^' );

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
