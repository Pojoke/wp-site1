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
define( 'DB_NAME', 'museum' );

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
define( 'AUTH_KEY',         'eQRw,P^R2L]|G}C2?3 8LaaG,>qmBLH5gAR{6`PH>mfye*jv<JIrZQ{rV$Z:>AL1' );
define( 'SECURE_AUTH_KEY',  '2w!Duz8qR>0sxoo=j=h4%r+wE){Iu0N9IYZW()co/*WRW^zlFFSL4v58}K*k=ZJN' );
define( 'LOGGED_IN_KEY',    '570pm[4naLh ]x@u58.qI0YxraNW_:#EEdksrn ALtX$-Nkwd%tYd1m{aT|PQgu+' );
define( 'NONCE_KEY',        'V0!c7BM/].=])&gpR$iO@d}QNqty{^9L-J-bDNB/@,OXRhhG|b WVo{7a~M$p!ah' );
define( 'AUTH_SALT',        'KsJsfEzT``~RB0Au!P~T!}w4nwBz:>_S@;l2|1EcmtNLNENAgz6b{oVJ&Y b./&T' );
define( 'SECURE_AUTH_SALT', '#yEa3Vx8c~bw~:M7{}LE6mB!LP@K:9x,oP;k80RL*fH*1H7$TvCf=/yexCS^sl93' );
define( 'LOGGED_IN_SALT',   '^LT6EVu4$+PJ8+W2!>dE*LMK<xoro.k7^n2.zTmdh~9xU#aZZiv9P;^Gz`Upk9p`' );
define( 'NONCE_SALT',       '*zBxV5q.Lq]$~-+zAq!6QUO1G<n6Yo!Q.P~yPoC&RBL8&1xr0V__n1QwP-3IC;L9' );

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
