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
define('DB_NAME', 'fantastic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'JETPACK_DEV_DEBUG', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[9A<A$<`m[!ehYw*/MhSys,e?v[UXT,2@l^:Yi=Wa=<y?EO||ooC)DQa M])k;3w');
define('SECURE_AUTH_KEY',  '|d!+({}s,R,ba`]J@b6IYJffW~[Q,G`gp+d1 c>r{}YyImz3HDI>3pQdY2VVZM1>');
define('LOGGED_IN_KEY',    'F+0Qdey@J~z&:{7#=VS4SPQwG&R2VOhX*BD2>##iDZ=@PC%OT$zrp.h:/H[wLKL9');
define('NONCE_KEY',        'j]Fs3sT)$`hdwmLc!fRkI.YEN7[ !}~S_zg</Bc4E2DrdSE+<wnE^:$Lr@%2NTY2');
define('AUTH_SALT',        '3<%NGT(q2))Two1wf ,3lXeMkIZ<GYSvSw+|#0+NC3Y,`4chx).KL.J#hvRDJ&n1');
define('SECURE_AUTH_SALT', '6o4n2EJ/={,6Q-~5eENwe|?|RV%#L!_V*i4Z+narBq^f9-PrA=jiy,1e+n.pKFe5');
define('LOGGED_IN_SALT',   '<FHB/D <M/}>j+^xo)!tfwxK3Rkx:v~}JEcKh[(&R%Y)<8ZVh[yX^-f-6Dl6P2oF');
define('NONCE_SALT',       '*#nvf*`3s:h}GfjrE$52)o!D=_UCurb&xE|PUSy#]G/Cs-Z[W$8;A6z#s!5wPd3x');

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
