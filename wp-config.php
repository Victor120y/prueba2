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
define( 'DB_NAME', 'github' );

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
define( 'AUTH_KEY',         '&*8oNS@571x s=0CT|!)Fqf!y>(G/Z~VZZp%#2}nHf}7dUk6jZx=su{%DDlzv52i' );
define( 'SECURE_AUTH_KEY',  '^TLd]-p^g*Ka?44&3JSSJeh(.rHXlt4Q,Az*:{d&QzZZ-G2ca:+2|GxuVrWVGb:~' );
define( 'LOGGED_IN_KEY',    'm0`0c+|^h=tqO9/fE}@<liu(epg&M$`+W?DrOEH<x^DN%6wCH=0tBXyFE-1QD>XS' );
define( 'NONCE_KEY',        'P5V0)2n9P^|d+b+iC&O3P+U5hRUV<)wC6({5dFm79nC+$0F?{vp@rwhi7vnoG?/R' );
define( 'AUTH_SALT',        'FMlm2hyI8r7,DOQ~st]GBeO%+(:xmMK+.X1$b+pYhCY /*Xr@uFum/3Ji0Yojys@' );
define( 'SECURE_AUTH_SALT', 'amNAj1l/%{Bar29@6a2S&m(UGfoIp~=zt0-t?/nHJMo57Wl8Buo]S!Cn#$~]nWw7' );
define( 'LOGGED_IN_SALT',   'q-H$@$-]z<14h_:rrffeI5,5^/-[-}.G6(d5?_Zg~gr3eOY[]g,q6]dpO!ux z-r' );
define( 'NONCE_SALT',       '.;lZ.,ND`4flM=,3ox#J5;=}|0psUUSI-Lj<b +h/]v6VUC$Jr#82CFw[b%[_.;8' );

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
