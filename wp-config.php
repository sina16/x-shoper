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
define( 'DB_NAME', 'SINA' );

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
define( 'AUTH_KEY',         'q~9PNB[(UZ,QM@nb8qjh|`nmH`.1SYN[fU]NMzm;,R(9oVl }slVpc^lso3QZE$p' );
define( 'SECURE_AUTH_KEY',  '</@O9T@^_+KAzReN#GPvzPtg06r`P!,[9nj}<s:D(Kt;9}d-NETU * j]deq4(9N' );
define( 'LOGGED_IN_KEY',    '=5CQnr1&fv[dtz`dnO8!1K+DNVT>b|l:|n+Vc{36^/0Df~k(.3qM^#}T,f2*wGaL' );
define( 'NONCE_KEY',        'LBEOMBby%lhFO|9mY&j@.aBs2YcyLMB=wx`oxk]LIkP,C#md:$*^4p?X2]2?m@6h' );
define( 'AUTH_SALT',        '>z8n/b!|%j&chc*OREOR+@v[~6nPl ?:W=JjLRaLG;niB6e~2(TYTJif~-@]G&M!' );
define( 'SECURE_AUTH_SALT', 'K^7d5DG4&bG+1knIu%giQzr@o66BtAxd^9sg)bXe?ifFHw5L5:Su#wVaMq~2Jz/I' );
define( 'LOGGED_IN_SALT',   '_8wT~58fa}A[Bb[,MQ~}=Wjo=}Z+~br7*>/IB%J9wQxH?CR(;l/EtZDN7I0-NIRx' );
define( 'NONCE_SALT',       '&=dB_FSkIodi^*0f7*;y&-elau[Hxk*E|8N+xexsJp0o@_,*Jh?%KE>4mezPBT)5' );

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
