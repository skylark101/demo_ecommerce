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
define( 'DB_NAME', 'demo_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<(&8C0_z$swetvg).zIx9o3P}/opgawKas<HUslw9$L[x0u^@`!lH^wg%PIz;lGB' );
define( 'SECURE_AUTH_KEY',  '>u>oTh=>*N4%6+XRTra?;5qeU~6B7JQRD6qE``65;qLW($k{ :(*:m}49kmV3Q5w' );
define( 'LOGGED_IN_KEY',    '`9GHzytsnVE7;JE:%V@lv22(g]#`r<vxN]4r])*xY`CdrgEe_*D7pv U+^LG>Vz4' );
define( 'NONCE_KEY',        '8=1}ND5Ke~bqiZv[/>XMz-U:<_}Ys0ZQ:f~abMZ&u*=-W_@=2 s75fm/eaDW{_@6' );
define( 'AUTH_SALT',        'l1`?g]4/kl#]YIYn+OVNYHLixeiUwZi*i)MV_IX}j1^am%LW+!tH%L%Q*$tEXZu=' );
define( 'SECURE_AUTH_SALT', ';+W]W5B-(l?Y3[+81r8q,0j@OVd :;8XB[Va7a^~ATx3=naq=s5=7axBf%qNFt,>' );
define( 'LOGGED_IN_SALT',   'M*S.FqlcJ!.|pl!fVJy&RG>WS)I`T`6nZTL)RG/ 7VU)NK_RE)0Ut=|R;=An~uI/' );
define( 'NONCE_SALT',       'Sd|vjP-,^DJ5}k[7TlO+wh3SpgSR[%%cn^Y1oqN<pI<%4LvvKFjc]?!pe`N *_kC' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
