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
define('DB_NAME', 'acpi');

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
define('AUTH_KEY',         'r2tyZ@s3 rsZ=lhW~9yz3MW-Qbp%O$ab.L7wEC}(xxd+kL[G|w@:r|.2<NFCYw-o');
define('SECURE_AUTH_KEY',  'uJyB$oj}txun Np*@<B`:4}`^~5lf)B`.kn|bO[LnK@_nFA!G7oE6]&zbea3.yJA');
define('LOGGED_IN_KEY',    '028oGZVJQk0- Y3;Fh`s0f0a;lh6*#O-ktn>I(D+]B.(n(H#aEkI;p8kj-`rOkeV');
define('NONCE_KEY',        'PW` /[16vLlZ/$ *C-NX|+-N$G{dR8>&&~b3K?qs{}Y,Z+VDj*xZN%E} K(b&??D');
define('AUTH_SALT',        '.%r<:QklNOl7IjN@>VZzO)3c4mb*[urqwU`Juy:ZZ+@2jO(9Dr_}Aqx1Y/wVu>qS');
define('SECURE_AUTH_SALT', '8Y@ec}g]i[9&?WrLAcfsq<V5r]%}DgNO~9aOd](k5L%[iqhVM^pLyDu99a#:fO!^');
define('LOGGED_IN_SALT',   '8ZMEFf6jsK~%XMi^}=DXbuu]j==~=YCrywM_S:<KsXOfe(h.1@0:F!Tq6U1oafwH');
define('NONCE_SALT',       'K]qdLpwGR:{Y;lh@}D(*V@>OtYy{ Uq:6>WatkUK9T+D/g%A$PfIZ-yR@Pwp7,D,');


define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/acpi/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'acpi_';

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
