<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'angur_live' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x=5sO,D@x#M)p3n3Q},,EBe/SXWd-?8lg$ 3UA1@a,ot<J6t|4VMAf7{.FF8@4!F' );
define( 'SECURE_AUTH_KEY',  'HJ:GPkxp8j-BYBLUYe?&`q^fj:tjZO`4&NvP0,dHkBQ6XvJmPS`$p?m=COeY=RX)' );
define( 'LOGGED_IN_KEY',    'Q@f-TMlwU4_SS|=X1;^2#Eg5]:WGsX95@.*o5gM9GcHV!)$LTdOdI1sd|sv2K.}]' );
define( 'NONCE_KEY',        '&o0C:+8(qvdN]oG~%d^8:*I:P|)#5Xe;c[osySueq~h^G_B2st[!14+yK}O~13W6' );
define( 'AUTH_SALT',        ']}&jE1$TSC| h7n5Ps-Z<pQa#]b*OS,z+lLr%DC`&=C=PF70qK=%q*..HA=EuHq ' );
define( 'SECURE_AUTH_SALT', '[t#(Q^S/_:J&J?tfz`pd~|uk6Nu!N9OE/~$0Z$Q1z-8Pc:XD}jorw-sX#+k9DSjr' );
define( 'LOGGED_IN_SALT',   'Q3pbXfu;SMcWCup*%mrIF`QCW9Jz~F<gG~eU{h:KEmECcC?klr.@yvLr<u_;]<>1' );
define( 'NONCE_SALT',       '(&W5$~6+/b#3@v+AB_|IUNT.S+Ydmd^`XQjTN]iZXw[.W5t*bm8ZG=POAwBX,O(G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
