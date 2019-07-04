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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'vectorblog' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Jpatt780' );

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
define( 'AUTH_KEY',         '[9O:;SKS~p8oEWKj<P_ZHg:Zx3[4^s`t/w.:8 R aT46s{f{RB.*#4qg%=rn-:i&' );
define( 'SECURE_AUTH_KEY',  ' 39W%c>J%6R+$k*wL2)vCwGc0z=us*Er<Rw@ro&7+!7c_6rKpby&6N7wr/mN<[Cr' );
define( 'LOGGED_IN_KEY',    '`90)W1b:bMqzMQ{$lZ++=?]VH;u!PlD98m/PMmM4wkR+%EN=*umFfkFZCj,joZhB' );
define( 'NONCE_KEY',        '`b@f$3SlQ,VIkI*orMKRjS*qNhQ{ElDaWz_Z1uue6h4JcbpT5H/#jU%QwvyM_0im' );
define( 'AUTH_SALT',        'k0KC(/r w~l~si|OXXWL+:)w7vPo?E+dA[5&=x[$cMD}]!jU5Szs<AA:lJX,tKMk' );
define( 'SECURE_AUTH_SALT', 'h$NB1-z/8w[#tWu`>COtg-((0IU>laN]U|0NNe:]AERvG0wum,UhmI;S*yA^F@u&' );
define( 'LOGGED_IN_SALT',   'iDjV_),j.>V95<1JAP#3`HH|sGX7L;d-su<PYvi/*;#<{ra6V/_:0X  zjj-hnEG' );
define( 'NONCE_SALT',       'bcU$v6]Y3/Myo[M>{(@6i%sU;]nM,>NkT`VCTiQX!R6pY[:P d`I{M$R.7f/4f.g' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
