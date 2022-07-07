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
define( 'DB_NAME', 'monkee_labs_db' );

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
define( 'AUTH_KEY',         'F&aL&E_LfA/Uh&<[cRkQY1&Zh{f.jaOS1HX@@tl_9T!B?/Hx2H0o=srJG7F[#)f=' );
define( 'SECURE_AUTH_KEY',  'L{7a(QkcS|Se}T%WQqH~ZBK 4|mDAn4}(L%*t/tX]_vA#H$_6!Ul{##DCYAKCkSf' );
define( 'LOGGED_IN_KEY',    'A#_h})H|g&mBoe/DZIyoc[8`V2SkD-A(`tmb/GY}UI03VA7H?I+$pc?E(z@.Oj`]' );
define( 'NONCE_KEY',        '?<LeStX6olDp`m}TpX#d$(XF!I,r(t,/};@InbhSmI~%Ylup9*F/Rf_ 4%|C}S*3' );
define( 'AUTH_SALT',        '(~lW_eaqe3]nk?/NC$Y$8A9E9{gp v:{6hmNfe )r;,&3HzQ@1z3bN;z+9O8vPx}' );
define( 'SECURE_AUTH_SALT', '^v@WEo*nq@c7^?YP>Tf2rkn<cfSYr!l(fBHAPjnHcH_nOOu.umE.y&WFKpO^@NdF' );
define( 'LOGGED_IN_SALT',   'G)w*h5i(2vLB1vMt m Z,Y>#DRXPWO})p68a?t?--]MCT /gOvbUjK*0z7+Di?w5' );
define( 'NONCE_SALT',       'KqUVk,me(2&.l4Rb|$kgpvwQ|+g ^d.G!fB8uzHWYLx1Q=uA:NKBE@6dNVLYo;g ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mol_';

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
