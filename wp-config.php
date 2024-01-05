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
define( 'DB_NAME', 'inmoda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Uo2!???g4Qe##c1[Uo UAn2)=Ag7wR#%f:C`g$9BR1-CO1kxFd5<|!nL{juEpk;m' );
define( 'SECURE_AUTH_KEY',  '+N<8NxnbCYLH,mkY8u6nlabEYrE?8:d9Wxl<jz,YBWm,J[YHf:PlQB+hT^lCJ0(Y' );
define( 'LOGGED_IN_KEY',    '55s:ZhE0(A,c,Y2bY4]FScwiG~8}`QxJ.eA&}KNq.:fsh1#~JfctMJi$jq1cdbJ{' );
define( 'NONCE_KEY',        '`@ sIOPs]uZ(KT{wIqj;>U29q)CYV]G^0+_mX.FGy&vS`%DH[)Pm3=*@8[,-?1mU' );
define( 'AUTH_SALT',        'DmB3%`^eCO~y15Dsp0Mhw;}HQVGysgU#,-J0<&TAE/Chu$?Q>(<,eL>F#D3IVr=B' );
define( 'SECURE_AUTH_SALT', 'lP#Ym-k]&&u|E)VadCs91Qp*`h06unS?`uXi.v=L^MPoHYg,&GP}NUSX}b+EW7w{' );
define( 'LOGGED_IN_SALT',   '])q$UNfiv(Nc(FR1GA/6eZ^2leK]l:{;Z,EjsC-c%~*DM-)#*Ufvz:_o7h-`@~<G' );
define( 'NONCE_SALT',       '`6d*RFa*Ds;QgpP%Zf?}GYgX6-Bi1|;] 2c<WjB&rS*R:6BJi^}]tG*A$3;T*Xz%' );

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
