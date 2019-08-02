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
if (file_exists(dirname(__FILE__) . '/localconfig.php')) {
    // Local database settings
    define( 'DB_NAME', 'wpnewtheme' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', 'localhost' );  
    //This will enable to download WP-plugins and WP-themes on a Mac
    define('FS_METHOD','direct');
} else {
    // Live database settings
    define( 'DB_NAME', 'kilic_dk' );
    define( 'DB_USER', 'kilic_dk' );
    define( 'DB_PASSWORD', '2Bin10yili' );
    define( 'DB_HOST', 'kilic.dk.mysql' );  
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|+YYT$IdA+wo>lGLdqG|vwxS ;;^5llS4$F7I|.nP*5@x:Ow09a%F+t2[+K|aTdF');
define('SECURE_AUTH_KEY',  '~^Ta<CC@X)v0NtC]>4[Cab&5->:icW[GmfpN<desvnGYVuHbMC%z9Qb04xr3!gmx');
define('LOGGED_IN_KEY',    'wD,GO`6|e]EP~)[tL+4,NR1s6wm:zuJ^Y2eys+]5tWJov6~WmtG134Gxhol+#<e+');
define('NONCE_KEY',        '?xM>jkun>-;/,zx=6uu6F(uE~tfD/x/=n(t;W2@Xvk;[s;1Z OW#d-QH7m^+C`zf');
define('AUTH_SALT',        'CB59-2@Aj7=wa}%>.`zYJB@O@rwZ0IldUi*cVJb^0iepcn{vB!b]#C6p.4QIPW+[');
define('SECURE_AUTH_SALT', '8wOzs,56b{72V5ud<-+yO0fq20ch.47Lna?uI7#j9h&PX?jH:KUIy]H>/SPX/ X$');
define('LOGGED_IN_SALT',   'S`R&D;]PD?$(lDvv[Ri5;UX8OufK:`pTQZha?:#/Qd@`OU*=KHF/}m(e,Q2G}Dm_');
define('NONCE_SALT',       'nFU$}JR{q2ZJQ*nNq-|[SVoZz)pv8swFq*7XJ`3bASy~Ix!0@m<%YdE8(2$TZ*/2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnewtheme_';

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
