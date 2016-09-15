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
define('DB_NAME', 'wpbk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'VNR*bE_x04UZ2RJnddp:MP|h..WWieDsZiSTmHUGe1UWUH=SlPsld9=:x[R#h*tb');
define('SECURE_AUTH_KEY',  'r;#+)[Z0zyg+D|SL`;@lp(n7DSu:0A>8#m:c+n6OPX8r#)_npP*3O*o{1t<VsLDk');
define('LOGGED_IN_KEY',    'xI-@)HY;s^Q&d>OX^2#Q4?N3.Z7HOG!w+o vbr$Q)il_`;?NR*U?E&A?O_K?fMW8');
define('NONCE_KEY',        'pt])L?Vt_TZLgQ0jGSUVSK8K74:zY^u|&2H|D_q7yK5_<r=iS57HC|x!!6Q3vJ8f');
define('AUTH_SALT',        ';{X8PwhtIHI)Prm;IfJh5|Pc$J3sit/H`@_v#1z,})7U@%lM<3}-*O~ g}7L}H-x');
define('SECURE_AUTH_SALT', '9`vj<28F|3_+[w&YAc-Q[,iEA4[7Vn_*oKI%<+)BrqkLPB3<kT(UmHO-KX>;;8BH');
define('LOGGED_IN_SALT',   'Vwt2:J2*-k+EXfOW1yI  $`)R,$UoiUu6a>*Q/yRjd&aE pf(!>lOHM/I}il|H T');
define('NONCE_SALT',       'G,;?giq!y_6]jkR$}cT^)X}4wgcrT~)Bi?Y~YTAPHn-Ia7tv= 6}^VSbF*A]o|cG');

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
