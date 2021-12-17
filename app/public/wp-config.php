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
define('AUTH_KEY',         'CswkzYCsd1FLIYD0qrWgYSsSr8+xSJOHx5V+27VWoY31R7793AYZG8ubWqbdy8Dvc4FofodaUurrlwOuJG2vGw==');
define('SECURE_AUTH_KEY',  '8vLWiUBrsUri0/t99uNuQqnNEf3Sn+MSFi3iTXf7lJYzMEPk5yGf8dSP7S7X6jRFUsAaZsMGF6Lyd9FKxkOXbg==');
define('LOGGED_IN_KEY',    'Avm85dzYfkpP1RWxOeNUrorAWa9jnRxc8Gj4f7tfZoMCOLIQnNm5ot5U1t5NUMdee5uqUCk5Vic180kCZ9Jp0Q==');
define('NONCE_KEY',        '//vWY670x55mnTqQaOQPMdac7r840MjuwUSXXA/79OeLAnW7ZcQi+FNvgOuNNL+WC7mJsauvdzxTIW3lEnMCnw==');
define('AUTH_SALT',        'EqZzxDbB9GUJcMmWjE7xKtnhvZEBZ/QG2laDDGiegpLl6Y7Mwe3IASfmzpgY9GENe3iL/2rEolxzmkATi4FS3Q==');
define('SECURE_AUTH_SALT', 'y4Pe52xVakkxUEBmZOQzhu6lbKCmVy4rrbsazl7PycoTcXKcBQjKrwgWaFaPAYNiiN5jtsN4+hljgqN6gXOfFg==');
define('LOGGED_IN_SALT',   'oF6uxvQxPTskWC2Kvj4uJwqJE89QcxvfpVWqQHaQ1QlF0E8GqIEfsUCphAIF5HGMr3d3LMiB3FXGzGJoioEiiQ==');
define('NONCE_SALT',       'oeb//fK1zici8pbC4bVfMLT5KAn5ZKvrx+hTVWkIRr4HEQsoKbJdDpBv/aHbLUM1iU+3bGktum4NVqf9WoIfHw==');

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
