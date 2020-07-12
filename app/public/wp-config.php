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
define('AUTH_KEY',         'CQPcA0WMODAvfsb7PuU6U5m4621Ui5asqTBlvHXhzQtRX6nauAp+cmLwci7SJBU0rTf+r+Xjiurfqbi7kMNv0Q==');
define('SECURE_AUTH_KEY',  'T4XjrYzYLb4PF6ps9fpeZOQEisk1KnqkoiBZ8ymuEiEDpanJXmrcrA0yDmeag2WFMGKbcBjQ2ivPE/a8Ww0XOQ==');
define('LOGGED_IN_KEY',    'AvGmdozqZ9rccKd5QR4U43HVa41phsLIh3FgrYcObanTN5Y1DNHJZF0ljuuF/RCaDtl+zxkaioqNYxKniaCYWg==');
define('NONCE_KEY',        'lWWSgmOqQ24ZVJjVHDf0xYQhZR2HD7WUAq0uV2z1ZPW3zaRCQyFef1IA/5aoekJkJxEFM5bxOf/ZchIGVC1l8A==');
define('AUTH_SALT',        'qiUS4e6D2/KrUdzfBv6DY4zBl1j0eN+LuIqv5shuxzkytptAXkHs1+5c0c8STlP78h5fvNuLcMdkfbGo+/3hRA==');
define('SECURE_AUTH_SALT', 'shosrXEtFXTqXklMG8tIvzTN7JaDRrMEHObQGudLizEJqaO0V05E1WMkSufFq+O1gypPSmQz+FYXGFosEO/glw==');
define('LOGGED_IN_SALT',   '7LQ18QzocrsJpGaivSVVFaRdlIgChzDUbJBvPvSJ/6MnN9u2IYW3rbdoB/17K/Jq1Q1GPDyurzsM829VOa/tkg==');
define('NONCE_SALT',       'InJzgBPWUMXSt0ijsXsphkhZ3S+VUqgHuyu71nwRNktkGYrZw7fHmlOnmpbZRwbO9X6IVoTjNchyZEutmuvGsw==');

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
