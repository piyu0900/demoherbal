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
define('DB_NAME', 'mahindra');

/** MySQL database username */
define('DB_USER', 'mahindra');

/** MySQL database password */
define('DB_PASSWORD', '^0~;tFTl)BD#');

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
define( 'AUTH_KEY',         ' s 9{^S^2qK; JBIq#&;>w![ukhysci[>go`,YOJjNI*btX44?FvBeLx%a-y^@aC' );
define( 'SECURE_AUTH_KEY',  'S{-d=NR-P7&cY#`k^nU~fml$nDh5R5^Ez`^MA@G(Lc{Q1fq&&cx5I1&K60TvSS)s' );
define( 'LOGGED_IN_KEY',    'A*eE]uNz;Ku8:730>ReNq}9@mRG.#j[RA2h7Rco`2pVyPsJQ`]@Qs9{z]Cz@*{c/' );
define( 'NONCE_KEY',        'o7G0~j40AW,K`({kT_9L<[:fkKat@ws<TMq_q01@k2$bMt:(s.L{$o~lMNQ6@fAf' );
define( 'AUTH_SALT',        '$P>e&pd3.!}ywlOI{Sk:Y,ud`4w/^M*f}#KV<+AR8ey`ZqQ1lN*cBD72PhyX=;HG' );
define( 'SECURE_AUTH_SALT', 'KB]F@^xkD?$lCa&q4&#&;lfG~op>fwJfxk:NV 7XcEhH]Xm/Q e4|MMVwy+6H@$}' );
define( 'LOGGED_IN_SALT',   '9<<KPqPz&}0mNb7BVTC9htlXfOc_Ftt]e{!G3K;s6 9E@}Yp|`*FK}%+rz,q87)K' );
define( 'NONCE_SALT',       '?odLJoM^Cz|:ia|=G_oqt((yr_KYS<oe,zVj}yEdGfu-fTF<?KsR8u.r9BpG&Tz7' );

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
