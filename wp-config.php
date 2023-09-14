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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '>Ybl4%h*|9-a.sd<[8-It=9/L1]F{m9m,ugW0X$@PRJ4~i4/94SZl&q&ag:e@5,b' );
define( 'SECURE_AUTH_KEY',  '5cm%;OA.p,a8at9G5F[-.wa[KHDxWHfClTpe=l*s5HM.L8JHUfs#AQWxy b-extz' );
define( 'LOGGED_IN_KEY',    'A)Cf3!rQktNDt=,n[,ubF7[y8d?eP;e^GBZkuxw;W-Wftf(I1/I:J_O_8&|8ZkZ|' );
define( 'NONCE_KEY',        'SS>sJgl:-6K@_vTFt!7vCcuZ*<,-*;-s2t)|]|rL/f)%G5NglNZP)Ej#@wxb+kA^' );
define( 'AUTH_SALT',        '|Ig3/${J&TIB]bY**h<QryK.eK3X)U=}*f!rjcS3VwIrB>./NA2U3G-}47t:1|MW' );
define( 'SECURE_AUTH_SALT', ']2@U*GrvIgr ^$JsE|U4~5,:.<X_{?-=xyg;xSjnOUg_;>@UBB3O?NLXG+Os-WVq' );
define( 'LOGGED_IN_SALT',   'jaD# m8n9y*Cn+`>Bc*f?SN`{DJt=P~=KegN#TCuvT4v6#`r2&M ZGwf[1}Tiz6$' );
define( 'NONCE_SALT',       '7qI{Y9:R_6R.f)dE4P>eJhI],5p2zzV3ggwcCnLuX8oZkpG|fzM}GIkXI&3)Lsy9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
