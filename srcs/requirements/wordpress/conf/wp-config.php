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
define( 'DB_NAME', 'dbname' );

/** Database username */
define( 'DB_USER', 'dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'dbpass' );

/** Database hostname */
define( 'DB_HOST', 'dbhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

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
define( 'AUTH_KEY',          'v~kN[- l@mtX_%*uR0x{P=%.CsMoOc{2`kg4!N|Ac$tLjAE.AoE:s2~/s]167LrS' );
define( 'SECURE_AUTH_KEY',   '6>^oi.OWEPL3?!2Vq?Sj7V}=Kh;-]eOd[5atVaWA=Lk_?IO 4^EO]}4VDzg4mR!`' );
define( 'LOGGED_IN_KEY',     '(&#8!)VG3w]6,4WdrrSXvJMg#>R@/pJ&dZ%~le=Bm7U^oTk%*djEbmM7rAi=4^@&' );
define( 'NONCE_KEY',         'n,x}cY[6[l.UF>07_YAS55)cOqOj(w?qaGKQ]&Vns}1o&$aH y?LZ<]Xq[;Py1[@' );
define( 'AUTH_SALT',         'h_/I(Q[f|Ag,#IZ#yw+B45Js%bpyg:,wM?D>:|-r_)WGd@+1=<>+iuhy`d/70pf5' );
define( 'SECURE_AUTH_SALT',  'Zo,L1dRj5X)hm!_pdP(M&N`5R(Pm4.!XeCxK5>?8>W,BH@%fa8}&W2{Hv-X*swN4' );
define( 'LOGGED_IN_SALT',    'oNp+w<-fZojd{KBr}#M7P)(JhM;zWA;.B&wsmsrtP?va/aw9up#h+5xc086&kLxb' );
define( 'NONCE_SALT',        '23DPn)HPlqB%Ps*P(!Bj2^LHnanxUPS>~!ihPpY(CJ3JY},B8)QCFWZdac;6Lb09' );
define( 'WP_CACHE_KEY_SALT', 'P>dzYU&dak=$ &(fb)^HMgBf~w.oAM9H]#4HKdSk:b#R:zAzE +2-W 7+R_TU>._' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>