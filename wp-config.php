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
define( 'DB_NAME', 'andre' );

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
define( 'AUTH_KEY',         '<{H:6C=_Y2B|un42RAE,i=MfsH>d.$I,Xh82e3}l1HeHld8&gkSkGHdkAyfbFjYz' );
define( 'SECURE_AUTH_KEY',  'k8kq4;V6EILR*Nq1GcAI~6?Mm_zJ9=r9[99orC1~q+m,`@[imKhU=O`]JqL2G=`W' );
define( 'LOGGED_IN_KEY',    '}`VBtIQ}u|1pvXG$d$}zy;Ae31BcaqX?F$0zuSP|#VI%GB]!j2t#<nLh}:5:wNDk' );
define( 'NONCE_KEY',        '%b*Ju^@OOTbn$Ng|u}(sV Qx&.H(v1R >rEg1]7Mj&91tx*aKM|y:_QO#sII~+Wt' );
define( 'AUTH_SALT',        'XnrL]Gw5e01.0rhF7&0;g{!5Qi%g<D~VM{fK+=5d=0U f=7; 6,ZDb5(/~qjgiwr' );
define( 'SECURE_AUTH_SALT', 'y7;>6I9TCn1O!]66&KVzDGo/&1$8OsL}K=^>Lre`KF7T%dA@f ;3g7a0JIZ`f!oj' );
define( 'LOGGED_IN_SALT',   'W;/Zt9xqX V(5rbLHWYi+mYY)R0.E>-H ];g,X9=f6o+<-2-XS]*-kdlK%[,DLMY' );
define( 'NONCE_SALT',       'M~bj}e@(.uTZ@4ZEO4]Exw|KLpOn^`IcJwO_a]7+lXS_&y=OQ{v)QpD*DHsK(Lge' );

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
