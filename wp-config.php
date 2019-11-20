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
define( 'DB_NAME', 'tallerbilly' );

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
define( 'AUTH_KEY',         'jp zjx-aW2gi@kGfj/1m `1mhlO#<5|oj2lJ2 Dq97MD1Md.g]d!d<sD<}uv@ Mo' );
define( 'SECURE_AUTH_KEY',  '@CMArG%2!R7NqW);_34DWQ-`_ U5R%xG3) /$`( DsJ#93|/FN|CO-l8X]tUdML_' );
define( 'LOGGED_IN_KEY',    'UU(!f2@(|-Uv(3MR&zEW6 @lQKhtRu}`=ij~vv04wC=bfobS_/<1r0IOHb-COC~y' );
define( 'NONCE_KEY',        ']]`=!w<8oi>$PF!Bn_[PqPqh#5~`3CcM,s|3Gxj$zBb>-rLZr}znH36,yp7xdf]~' );
define( 'AUTH_SALT',        'K992A,s[7x`^cD:l]$)^8%.zj;oNw4dYe4#&&W (%6]4A5t t`M1CWD0w>X#v;nR' );
define( 'SECURE_AUTH_SALT', 'i:)P{kKqm%UiB?oaEXxlw/&8Y_>cyOBZ(S^Z*+5[=PhPA+siUcD5YN$GEHP-d5:>' );
define( 'LOGGED_IN_SALT',   'r/0IH3~=vncD]+vLifHeYh/&t e0Jp@UzUwK^,m&^F$5/&K<984Qmc)#azVTN#w*' );
define( 'NONCE_SALT',       'l-(XzXNC+p}oW%QPq24j ?[L k=*ZDF(}~9Z/n.#0U:4Qh|:;DemS^Hk%R-$#%i1' );

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
