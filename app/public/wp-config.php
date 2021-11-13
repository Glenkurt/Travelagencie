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
define('AUTH_KEY',         'Axv2NX5arERky/vJDYde8hkE+5TUYLb6MMVLK3UYZpjMuqVyhHp5HGc8VAg3ptB9PsiUlX76xZLLSrB+yWbGnw==');
define('SECURE_AUTH_KEY',  'lT5AUcWX2P8eQ2Eu2TIGsAc4SKn7GHkDMj8tcfCebD/DSBozQd7A563nQoMqfTSEyQeir8e6SYoI2WPXHbzM6w==');
define('LOGGED_IN_KEY',    'xTE0zr1eupFAWzwScXLymLNWXDyOGjRfZoW01A1p9wy/5FhsNeXAifztvktDfJ+c9wJXEUW5gxqj9iUmTCTmbA==');
define('NONCE_KEY',        'xQcbA4y4KpBtz+4fUCoVbwXEpVoQYs/LeyLqOxEsCljGjVQtaI0E9OXJtgpw6fek5Gd7608BYrzyp0St47LrJg==');
define('AUTH_SALT',        'AOZVibrtvoR8UvF48/m992jWMrJwi3UZI6FJwnzFOWrsU6NDt1wZ/E7rUO8JUSVj2fSkvvINjlmz8JRUGu2Rxg==');
define('SECURE_AUTH_SALT', 'pVqsnJEfzpKE1mBsXHC6BOYWkGkPE6dKk8CJ4mRGozXQa8rxUB6bwibF/YbYTwfSRE+wRpjOCXvrroj6GyZaFg==');
define('LOGGED_IN_SALT',   'V+V02BYyLzP2JKUENWU1KID78RLHj17aLYNBj1H0CRP/qhx3UPSfqaVzvv24hyiDrvJFEkn8altTmqssYGu5aA==');
define('NONCE_SALT',       '1VJvtcF6gDZbmniNySr+Zqffwsqv1BUIz1qKKgqT0FkUNclnk1P/6EgSZCd4KNUVXVCUgfR6ouevb3Yn90mmVA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
