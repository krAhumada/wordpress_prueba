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
define( 'DB_NAME', 'delfosti_wordpress' );

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
define( 'AUTH_KEY',         'Rr4`>])<>Y%uZgu@1;DJBu)8gAyh@vZMuQzHv3#*=wj$9aL1Z?H~fKa?+xQ*+2Of' );
define( 'SECURE_AUTH_KEY',  ')w:<~E_ozdnjRS1F9#(LV1&p`]7]cwD)jR/mxZvnZ-L9kE<L(=UsIv;kNm9CGW*d' );
define( 'LOGGED_IN_KEY',    'Y3$^&&:m5FfhAZe%P% z~O|<u/V4a$QHxz_PjTy&g_X);H#c/`0P^-0;BBz@qvBD' );
define( 'NONCE_KEY',        'YwI#Wl!rPK[ oIy+sCS%ki=AUp$OiL{l~D@IX;Cx=2<rbeA@G`K-LRwoIjXg)70H' );
define( 'AUTH_SALT',        '^)_{wL|wC-O =.-v%Mh+qMk7Y65JVrKr#}SQs`{08:9A06N)/4:K:PpYd {3PQju' );
define( 'SECURE_AUTH_SALT', 'b@ +OXkl`0EP`YyA))W}&{Y %:1H7k+k!ky1;C(Nn>g-}]rje^rE^^:x4V`VbB]k' );
define( 'LOGGED_IN_SALT',   'A_@x?G={(VV7wV0aI}J0p^t1CZK$_ Zd~B&(A/HPwf<:2DV%l_=B_dgwR1jbe%8B' );
define( 'NONCE_SALT',       'rXJ[iM#UtTQ6e1&IW,WfqMDiD^E^Yp=JRwJ-t!-hPXXsOBC2y+EJ?4^>UK?ppHCh' );

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
