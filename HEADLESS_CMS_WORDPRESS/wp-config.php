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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'headless_cms_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'R&*!1E+b=`lHNKPv-qaj&OW*XZh^<vG{G]oa|nu2PGaW7BY,}M^~nd[=0Oa*!-jn' );
define( 'SECURE_AUTH_KEY',  'xsbBLa,>PoYAKpL@oUEQOAt{r+~zm@=P?W+BV;c}RGQ!],|~kIk6K+sRJ cae0B?' );
define( 'LOGGED_IN_KEY',    '<FRiH9=8CzP.3=h>:y{uZf>BSIl70dG`+6g ZeoL|VAf.{XOX<%alGG<Xo0fm~)n' );
define( 'NONCE_KEY',        'xw-.|>f$<q0&K|L/Cg(D)hQg@)uvK]Xn/MRG4~(2)rm=_:R}pv1{;H-<.HIS;M5N' );
define( 'AUTH_SALT',        ':RO7~M%GaXggpfL!$)oHCsUrB]eE4nZ=X/Vt8!:h<{uy&D-2id7iU5nrRa<>QqVH' );
define( 'SECURE_AUTH_SALT', '{lke Qs92aa4,)^@=3yY]_pQv9EwoyU&^)}pt_jC+2!5Z$)q6uU{o31MnP&VS44;' );
define( 'LOGGED_IN_SALT',   '@:NR@nK:xxQVQdl%03Rd>9YJ$)sE)nC8=NeiOmxRJg@e(Yx/-e(w2#EluH}Qeg&K' );
define( 'NONCE_SALT',       's~g Vt*D Ex%a8g=fwN^<+ormtaIHX5wF-3T?~_lEs5Y86W&WGRm|/TT3,brMk(.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_headless_cms_wordpress';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
