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
define( 'DB_NAME', 'coffeeHouse' );

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
define( 'AUTH_KEY',         'D[:1H>r~OZFK|aJvKBnB9!dytX-1V_.k)T 6$!V[%PcHX,{P&@? zAmccM:00f5]' );
define( 'SECURE_AUTH_KEY',  'v^Z|G#V5gC[+B|dy9(D1xy<^b7,>/$Mvv9n-<HtZ)yWJq_r(A3w_[qKQ,HS}HR@y' );
define( 'LOGGED_IN_KEY',    'D]]pZg&iPOSPGtS@{klj$6BOBID/9vLM+_C+[8Po9XQQgKIGnvy :CauXEpL9,6j' );
define( 'NONCE_KEY',        '$`QQcF4!(^^0$_j:d{#Vlo~d_l[{7,xvOB.%AX8c!Rftjt|>FyftIaPVX4#@KKX2' );
define( 'AUTH_SALT',        'q3az%RqU@-!Eu,wq}#%g;c|s>f:bh`HM5dR(IeUFW]=Dw|Jf?w[7n6syFmN_$];I' );
define( 'SECURE_AUTH_SALT', 'd@+NwOQ)<Z-]O3?r r.t.M);84<?(D&_`.lUR&Xd,6R@h.FuX{#8xSsm;is<i^4U' );
define( 'LOGGED_IN_SALT',   '*AT&L*KA!_QV1VN,nCLT+mng{XL][7.gR=>W[zAr@^:6s}3VQydZ1Zfrwu+/)BY&' );
define( 'NONCE_SALT',       'u`T)zR@1>%f]>[! X(C~3u*`{a7p9!7E{xa)d>XmJbQ) SL-fZp-0;XP*BS9!p0N' );

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
