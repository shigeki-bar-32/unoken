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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'notuBCeKYcxOLun:n7Nh{j=Q.9cB4AUg/Fb($]1`0g# hIgWb}[7ty$Oc!,l$b;=' );
define( 'SECURE_AUTH_KEY',   'aF>f7,siSk!j`Z7md|$TIc/y0kaCO(E[Q-w=;nX6N>~E:q0]VaX<(R$EL+&-+Zl9' );
define( 'LOGGED_IN_KEY',     'l(50+C_GaM`_QrB@XY(3xMKYf(XESfZ*>Z}m<n:Lt88&7Tex$shgcp*.P<hh^Epz' );
define( 'NONCE_KEY',         '@EV1G}[8BF>EH#-PTe[Fg?(DInox`Z@6g=sONv&BnMO`T*LkTxHLU)onzBGR*0v;' );
define( 'AUTH_SALT',         '!/p0 rmbqQPww&m4eBP:h-npnNj(EP J^#9AjT4t)LX93D.vk6@x]BYH5[*Se2s%' );
define( 'SECURE_AUTH_SALT',  'ouE]/rZBRU6B6cvZ-oFneBQHhl+;t;C&ym-g^Q3vSAGP|hh9]Yzz?KsGa TY!zb{' );
define( 'LOGGED_IN_SALT',    '-J|MeH]c=n#8i@?;)e9PJ$K#IxVa,N5`r9&gd/iW9fO$D^]86Yb%OWV`**$wE-CE' );
define( 'NONCE_SALT',        '.3{@.X?A[Kd~}|XJ9Z2.%T1B2U6YVWp}pCV)#-WHd,je!IlqIEAfM,Qi9;#9A)Qk' );
define( 'WP_CACHE_KEY_SALT', 'uwC:^r%n1Ci#2_%$y`MZw4=c`8x3=1f!MeTwTF=USTT|.cXs =??ThpTbdpOc{=f' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
