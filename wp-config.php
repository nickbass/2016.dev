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
define('DB_NAME', '2016DBm22bs');

/** MySQL database username */
define('DB_USER', '2016DBm22bs');

/** MySQL database password */
define('DB_PASSWORD', 'glRRjGMu1');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'M0RvBk}Y^]W~KwCl:Z|N6i]T*Lt9l;3f>U$Eq6f{8k:V!NvCo4gl1e]S-Gs5lT$Eq');
define('SECURE_AUTH_KEY',  '>$3b<Qy!KwCo0c>NzB]S~Ht5h:V_{T+IuAi;W_T$Iq6i;X*Lx@JrBjj<MuZ|N-Go');
define('LOGGED_IN_KEY',    '4RzCo0c>U^]W~Ow9p1h[T*LtDq6i]a_}U^MyAm3f{wCo4g}Y,NzFO-Gt9l1d[R!e#');
define('NONCE_KEY',        'Eb.LV!Jr8g}U^JW+Ht5h[S~GPyAm;X.Lt9,QzBnf<Q$ENwCk0Y!NvBh]W~Gs5h:V');
define('AUTH_SALT',        'AY!Fr7j}Y^MS_Ks4g[V@F;T*Ht9h]W_<Q$Eq6i{T*[R@Fr4g}U$IO-Cp1d|RU0vR>');
define('SECURE_AUTH_SALT', 'GZf7vM^U}g7rH+P]iAuM*XO|Z1lDxO#iY0kCzR|h4of7rEyQ,c0k7T<e6qE$Q,bS]');
define('LOGGED_IN_SALT',   '8gqI*X{jBuM_W:hD+P#e2mc4sG-R!Z1pjBvJ^Y0oJ@xP.b3qEyQ>kCwR|d8wO#^c3');
define('NONCE_SALT',       'hvc4rN!Z}kf3mAuQ{f7nh5pH+P<a2qE8sK~W[h5xO$Y}k7rN!Z}<f6qI$U>f3;lDx');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
