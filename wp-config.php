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
define('DB_NAME', 'testwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}fb%6S4h0|hw>U:xUoc**!JSTkbiX8GtuP[)(q`%RBvoJbxOY^B#tj(:pJel~-sv');
define('SECURE_AUTH_KEY',  '=Z#B|9%j:MQC2Y[@j|j02r|&5bG?:s>/Pbl|8LDf ndA)NVfDsk1c,(38S7zoa2[');
define('LOGGED_IN_KEY',    '+`CB~(wd*.j-dN%0|+~c3dCeWny=aZ|9ukP&sGUN[OZ7kJ$#v@Gf+.>!6MlHV+yQ');
define('NONCE_KEY',        '=BQ-@7uEOegCg@5!Dn&l@+^xO`2p5{1;Hk$bmB=`cL[He/^H-vTOY[SUasX_hzQo');
define('AUTH_SALT',        'Du}-qXkF6Xspx;T(#Al=+6OCKU]<)|Ie?,_Y|q3Kzsn=ed#u+kz?a4 jL,0-5B(+');
define('SECURE_AUTH_SALT', ':.h6Gz#3csL!A{+p7f-n--U6ggG?L*7)H(6)|nOc=saKs?~Iy[KBu8{48-`4SUJb');
define('LOGGED_IN_SALT',   '}[ry{Kddwjha-F0g&^gjp~*DgH1;_.4C=[(~dP[_I5UyN^eE:oUpL*+s&k-J4Jt ');
define('NONCE_SALT',       'W^WA$[lVMm20D+My/rlD8KU/lIA[Aqo}vUvN2J elQ:A8[W}A|e<8+XU~{h|Foo/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
