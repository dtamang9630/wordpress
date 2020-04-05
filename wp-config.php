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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Bd}=aqY]?1WsyRd;rGIa6=W|4}5JALs3vnLKiK{OVQu+x1L!I5oDqvbYV~T$@78R' );
define( 'SECURE_AUTH_KEY',  'Q=f<I$5KZ#h1s~$w;}Ace`p$zR1c-pNw#YG_Ccde1D|rb.OS[2MgX,qS)0(=<N&>' );
define( 'LOGGED_IN_KEY',    '00Yw)G>fNSej%Psz_FLdf[0@XwCbefc`W#D?]0HWGPr; IuTO(NL&l~WvQk2L@!c' );
define( 'NONCE_KEY',        '&ET<+D~=)|Mz/re34w+bmF]a5b)q)&`~5sf~p%?Zo0 =(z.Yu`^r6Mu{[*q4?`Gd' );
define( 'AUTH_SALT',        'W^NYmR5| }N!%~+`gi!cuK.X@m&C3F&R0;5Mo97R~CTqC,@^< PuAZpzrBW5g]]^' );
define( 'SECURE_AUTH_SALT', 'L+LUyf}ikK:`SMM$V7UZ#5B5](0Rhg/Qs`BYhd.gbRGuA1f%F`qNWeeqiX~cnMD3' );
define( 'LOGGED_IN_SALT',   'q,w%9d-#zh{n-rv*1&]dO>[FOR>.yQiB[Jn-{_otjV(i26Wp7#er<89DT{?nA+M ' );
define( 'NONCE_SALT',       '62WE[!;K+0;jj%u.mhL<A#.I37776Po-0U{Qj#]`D%+}NWM<1S<h[5ckED+$BL U' );

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
