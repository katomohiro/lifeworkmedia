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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YdYXrMH8/b+q51P6BdQzHYWBGUJ6Et8O6mkXpmC9aywGNpWpoEj5UL10TCdWprVJw0NlNOY/gtbSiRMT3koIVg==');
define('SECURE_AUTH_KEY',  'r6KvinW7fv9v4tr1XuHnK0YQ362+/dKanhqCnYEbw3wHmJvNIOMudenlAIakFWUwMX75s1YI7bECYHr1oQHKUw==');
define('LOGGED_IN_KEY',    'lV6xTLVFwIWv7E1mDXQBaaAX+R5FLifvtKgBJCMguOSxUOECpd9YbU+Kc4D1Op44nwFtNzG1W4ISYn+t9VGM/w==');
define('NONCE_KEY',        'fNle/KToneBrZVU/8SPwI9YLs3ScV4LpeKDWydNF/oodyOdkryfjT8xVLoBiQH+Q58TqohQRQ5QaJZv/VdHpsg==');
define('AUTH_SALT',        'fFbIu/oh/sUsQHM0FZpCpqSwTbjBWZmM5qcern1P/NLKJBdGzkVCvwB+KQjEvLOtd+EDVdbjrrROv7e3WwScHw==');
define('SECURE_AUTH_SALT', '5llgm4g8Mu0FMJstqnIsFbbZqJZHf5pEHevucFW3X6f+cUpc170gCu/P2dG7bAWLI5YyukmPj1Do9bx+VDajBQ==');
define('LOGGED_IN_SALT',   'oyhXcjJqoi6RQ95RpNGMSk1+S4bWOAEacYUn0SZrApaVKCwSNLwcT/X8EUm2YEkU2ctTn0F1FQJtaLPUUnbj2g==');
define('NONCE_SALT',       'rbyD+U/FpyNdbSWzMGpmuDkJcYfgKJztr2hBOF9dK/qI0GIUY2MSc+e75I5JLZpVyZmqrnXQuZq0I+HGePtvnw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lwm_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
