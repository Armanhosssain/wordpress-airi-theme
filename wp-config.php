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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'arman' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yNPew0FmpVy961ZH' );

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
define( 'AUTH_KEY',         'VzwI_UlIP4idjZO/)hLK`(_X/8d&T%Pk!7jPo}#O>EopsYW1|zK*.#%)@,xhVj?b' );
define( 'SECURE_AUTH_KEY',  '&@M[V!cHw9`0AyaAS+8jP?#WNZiG2?!vg2VpH!C)t6!@[S1e@ABe+_MWn`XogG}(' );
define( 'LOGGED_IN_KEY',    'Fl_<-LeVk&Q#n42`c`}nY,3*z<5V:U01yF,FD5,Y0LZk]Qo4ORsMcjxR/.OYQDYp' );
define( 'NONCE_KEY',        'OCc^0:o)nWr{aW?|GE#}SA$/+7T/_t _&nQ8iej*FlgHfjiS[8s@Ym{xC##lR#XX' );
define( 'AUTH_SALT',        ':%OzZ;bI*wbG}-.J.g<oKlyF^|HY@.K$/_^@SD.y&LfLR_IXo*Gh#vNc2[OL}jFo' );
define( 'SECURE_AUTH_SALT', '2ra%=~G/&4~4v8))uZV;s|5lJa)V=l)Gria=-15AE.=2u(#Am,`j$pHTZaw0MRas' );
define( 'LOGGED_IN_SALT',   ';}9h`kz,Qw,3YuYm!$`5DJVXA|QN@d~adC;.F1TT6>zoY<C_NJ]XoefGGq= 7mDC' );
define( 'NONCE_SALT',       '5R=iu@)4<4D}Qr[E+P]-_(Spz>G(CzsEOMH:KMWe_{%[TWIQNE:r#nxs:pn7hwja' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpimport_';

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
