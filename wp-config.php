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
define( 'DB_NAME', 'becoin_db' );

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
define( 'AUTH_KEY',         '0O2;%+3YMw!4meX*W.hc,A2H`m!~TVtvTE?%(8)B>^L?F5Dh7CH,#EqpOBArbfBw' );
define( 'SECURE_AUTH_KEY',  '(-77vw+gF)6MZZDv#v`3D,Z]h$+UV)8eV,Xxo0Wo6X~>Gms3HNGC2kw]`0]29&a`' );
define( 'LOGGED_IN_KEY',    'o(hgJEj&D*PIv+ieNaE[PqXu.oNi]F$>^n}5/QuxU{SP-vy%BihxMxoY30;ZLfr6' );
define( 'NONCE_KEY',        '<CyUNRgV<S3`##WjhqLFA/{<evIGbiFm =uMB9~E4CT{8DfMk[asL*,g}_oW8Dd@' );
define( 'AUTH_SALT',        'y3~g2P!bN:j0PgssDLOy}/=X?*P|!8BebO46)d=K<T9,j_Q>fB@1Kt`].cnqO][x' );
define( 'SECURE_AUTH_SALT', 'hlJ,^SFampByT-(op[@f*Js>2EPq_Qop~ DUY3-t2L2vy&7r7[P/qk(3%A4$!OOB' );
define( 'LOGGED_IN_SALT',   '~nKSVL00D!h#3>s8c8[5gx7#0ILwZRa~IjrOp:F_KXrO-luHMc%NXG`}n|n_XzgU' );
define( 'NONCE_SALT',       '(naMW=IJ=@BCd87?8@0Ntornn]bU*/&0CZT5=w^vG#^Rb%d:q]5}F[^K<M%A#Bf ' );

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
