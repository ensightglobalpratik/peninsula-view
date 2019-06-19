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
define( 'DB_NAME', 'peninsula_view' );

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
define( 'AUTH_KEY',         'L<t@o(z| ~[3U$u+`zlu<D=;nOi)Yk`(1+$+pH,K<_NJ`4Cn#V[LB{{=!oSH&D<x' );
define( 'SECURE_AUTH_KEY',  ',?7TTs$PDbRh`^iEBj$Y7R9Uy`|>uTmJja_L*.LfqCGebTB4fA5}A3(&_Y/*$C=k' );
define( 'LOGGED_IN_KEY',    'E(lV[Oaj01m!P+/8-8LjEL0,tA9q,Y:i32OFSe0v[,y&JAWwBsbHD7dl2AAp!}Hn' );
define( 'NONCE_KEY',        'WE8AzU9c5B.FtwBw!l_/qyaNu+&HE=`(uF;e!wy~?9.?GMWT<;{^R%3ReVr&FiJ;' );
define( 'AUTH_SALT',        'K>?F&eCzY[/!XPf)kHb~fIib]5WGdYYYVNwBRnDFP-@f~Jq:_=y2fi)<A`4@b(hz' );
define( 'SECURE_AUTH_SALT', 'vu5_j Wk[w|_TIG,z] GB$-{y 2}Epl`8JHi{5vu`J mz3NhR+H2/nr#))#yd=%y' );
define( 'LOGGED_IN_SALT',   'X HAlzq>i3htCzl_te,xjfJ@;MY!ordKrsN}}U$^VhFCaI61}YgG7YXryh`,0B84' );
define( 'NONCE_SALT',       'rs^I7lf50_j*x:A7*AGjA?dOxGa<uOqn/MBKn9(f$8zH;<^TbC!2[(iUnH%=Dne7' );

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
