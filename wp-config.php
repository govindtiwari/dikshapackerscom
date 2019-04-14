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
define( 'DB_NAME', 'dikshapa_newdiksha' );

/** MySQL database username */
define( 'DB_USER', 'dikshapa_newdiks' );

/** MySQL database password */
define( 'DB_PASSWORD', 'g~Jl.6WD%Us0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'MDdfI0kbEsLgQ3qiSxUFcIVDndxvHVxO5iMK8P6zEisDUtOfDiDkoJYWyHFQGPvj');
define('SECURE_AUTH_KEY',  'r9CRSnC4gR6atzSufr76nyEkAfFz6LWbYxbFTiNacLyYzdLDYRngaAEFJ9ncpj61');
define('LOGGED_IN_KEY',    'x1fCKlH8DBAcYmckBPkCuzEnd8KlPUHh30yt0dLRusj1eA0crWUAAgBdoW4NpLRw');
define('NONCE_KEY',        'l9NGoVEkJh403NW27RL83GaBwGu3ZlkQCrSv5bbAfwPhjvaS20CH7rV5c4Fqkis9');
define('AUTH_SALT',        'H0W7qLxcXtFxU4okOfBM7QTbTCtsFthgXDIhEERuUAqFflHAeHb2h7kfPz2O4TLX');
define('SECURE_AUTH_SALT', 'fyICqm4mOBhpY6LpiSemXTRfNs1j9YQXHitM5WfOfGk0SQtC121cR7sU9lWtuEXH');
define('LOGGED_IN_SALT',   'QU3G9Nr7QrfslbuZygZBz3m85eiiQhPhfLgkQ3b7Y1MYWTJTZCpGXe0w04m1n2iE');
define('NONCE_SALT',       'UYfWmclpv7hPD33rrYOOFYgiegfMQu1JnAPp93w4F5ObUuL9hnCene44bcw4OeFR');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
