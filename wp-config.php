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
define( 'DB_NAME', 'web_portfolio1' );

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
define( 'AUTH_KEY',         ':-`(23*H7QO2%KXZ:tuU|mFk@dOzII%R(6wCL39kM,!`<0$@%+OZ<&Y~!+E$#d/w' );
define( 'SECURE_AUTH_KEY',  'wXJmft,&taf}Vv+Gj{mmAuWg=^bj]ROn/g)N&:/-Q? 6KAVH[UKiW.K]i}+)7 ?)' );
define( 'LOGGED_IN_KEY',    'D6P`*Uq(D*9(PSsEN3g%@=VON];D9;7MHvckEXt@P87}$H*[2R~2P`T=xsBA_Vw6' );
define( 'NONCE_KEY',        'B!oFYo%|d9b9t-NlPX.k!eM2{pd04LsDAO@yIf45g4oy)?:6P9g6mm+)jJnxONDl' );
define( 'AUTH_SALT',        '66pi<w*#m`U5ZnG1mm c6!#(U*TSkitl%DoububC LuN51Y[jQ@i7x0|ydf@_!Aa' );
define( 'SECURE_AUTH_SALT', 'E(m$%yH*ejGza^Qm2[M4<d<TQRuUea!%vE{@TAG&S%Z.s=p(R7/;:[=-?:2UY.st' );
define( 'LOGGED_IN_SALT',   't&>OClbJ5f52u<{+0x:l9F1a_tn79}9fLM|x%0:<7g2QFS#)W]9o<TLa.}6&_ .9' );
define( 'NONCE_SALT',       'v3k{HaSF)?6ukm 4aq@uGS?{YvYK$^6*5?t/?7;1]d rcUIAj@<9WA,9BkA$cW_Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
