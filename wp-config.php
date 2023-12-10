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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b-n4D`% e9@;?0Yleips?3#+O%Ew{L)]XkP2sD:+.Ad/2y=|[9WKD23?>J(,5yD|' );
define( 'SECURE_AUTH_KEY',  '19F}&M^f%CK~[q78LM077jS{|zm1_i+[Chf;CpCY})HOyx(KQ#f{G;2_!uaCrUk?' );
define( 'LOGGED_IN_KEY',    '9N[DaLYXb4NN[m^}diwB8|O%mFY;*mm1JJC[aj9ls=3S%K7iD<H~{%B|%AzJ-0jQ' );
define( 'NONCE_KEY',        '%t@G~+pcLT[p0G}G|)ZObn#$G]o14<M:hWMBy,ZpRk:`v4$*og^V4wYWALNcip>m' );
define( 'AUTH_SALT',        '.;$OWlVSY;<_zq[P0uPHtFP789HSBN/$Pi8%>*4in)AoJ6K.B2B:..^TB7WL7zRa' );
define( 'SECURE_AUTH_SALT', 'V@_,i^V8q)05~;C4!2l^CE&Jf6[w2MDPI7i^ukLs?;A)RZJyV}o9;CvIZqho1`67' );
define( 'LOGGED_IN_SALT',   'TP<au3O>b<s/i5zMNvH+F@n-iGr@20w>#K&+n3g~ztGn.}8fKgy3E0ui1szupUFP' );
define( 'NONCE_SALT',       ']Adr/JY{Jv3MS?<8p,z<y6mf[1V=Ny[96d#*GA80+z1Vd1!nrPDku7W@{@!7HZVV' );

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
