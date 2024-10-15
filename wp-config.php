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
define( 'DB_NAME', 'gvm' );

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
define( 'AUTH_KEY',         'g+OQpp aG <By^|pWK5*t;fCn&|SHH}/;Br@XEHIhh7{~GK?4yPHR<ESk?yF1R 4' );
define( 'SECURE_AUTH_KEY',  'vB4lrjLXK[?OkM62:DlpgYs =@ndY7+_p1NqB.uV{dJQ6crC<f?%%UpXK]ZL%t#U' );
define( 'LOGGED_IN_KEY',    'Y;B2a]4SrS;T;aP#WaB=Y=:hYZ;OELHhtnkEIJYZUvt~H,#sfstV(_;Ri9`{yp$v' );
define( 'NONCE_KEY',        '^qzT1Mw:_?~!yo{UAjD0dQPNq9>LWM.=o`r:-51rHw%Hj5T[#c,,Qj)w$x8|eC(1' );
define( 'AUTH_SALT',        'W7mn4@ZMKyA^Kiu/I(vDGjQ-p1gao^bFqk(ue&/-]l0amf0xF?mN!d!]2v{1(AMn' );
define( 'SECURE_AUTH_SALT', 'u-`qz*:<-X|-GP-:9$I59+[sU$n,{u2ESgMZes5~]yvkfso)ljJc39Jg* .M-Al1' );
define( 'LOGGED_IN_SALT',   '<iW<tW:Et2W,K1~,M.lf`2bs*d$%L!aejk,I;?NU]IB[tKBDT2z(m9@>.l4<YcTc' );
define( 'NONCE_SALT',       'il.&C3NK.$HYuELlg7&cb>~Rn*~Z1AzlO3e.*5(jk<=HH1:Rf:a>5*l?bA/%8hW9' );

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
