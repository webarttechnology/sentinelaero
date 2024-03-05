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
define( 'DB_NAME', 'sentinelaerodata' );

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
define( 'AUTH_KEY',         '}Zk.16}PlIu=?IblJun=~A5:Pl}YRVQD2b>7YPr> A9hbB-qccT/@($I$j?E4mnp' );
define( 'SECURE_AUTH_KEY',  '$O2;3n9rjeR/T1%q13E@o)R^7Z,$aMLsY[]LN=:7D1ZE2u:C#*m&[J!1WR<>)epI' );
define( 'LOGGED_IN_KEY',    'U7,1;n{~qgD4=5!XI93%j0iIs y+@4e#N9)3jWBVE6hQ-{LC<Gw(5tD1 /X,}_5T' );
define( 'NONCE_KEY',        '6?%l DKS&rmxUSCSmLRvC~g1@yaeqv+Q&!rN %dYJuh=i2+O }>M>)qe*: s~ ha' );
define( 'AUTH_SALT',        'aq<aI[tYcPih!HpcU9sg9}jW-~RqCy&/c6)5ln3uN>mj]v-z-> m2m%{Z+[U]T_{' );
define( 'SECURE_AUTH_SALT', '/vUZ^W0~B>;-<=}+qY_hO>PpW)#*S=)]uk+Fw$l8[cCK^OQ%?iv@s-UuX~]s,XJq' );
define( 'LOGGED_IN_SALT',   'ph-g#SH0Rkl8|&$eW&Cg<6f*fg97@-{3a1z;ldMdfVUZq_u7A?o6Wu48D!V_aEr1' );
define( 'NONCE_SALT',       '>Vt.L)s)Ef-7*`GRP-WN;gu0X ^E^|4RI@`*x$@wLJC).^U_PLsE~Ajqn#Fs_>dG' );

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
define( 'WP_DEBUG', true );
//define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
