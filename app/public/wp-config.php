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
define('AUTH_KEY',         'vCkCTPgLY37W/tUCThIXAvemiyEVtWTsXVDXUvOyjywqceIYdRQlgONzcQsry0sIhQn3nETqrSntNokujUdvdQ==');
define('SECURE_AUTH_KEY',  'bnByVq4DGINdw9n7UbhyTI2Dv/P3GpJyVAUS7uEI8G6vYZSlcE4q0hkwnnq2NSHprdB93sNmvE+kt7BFjk56Vg==');
define('LOGGED_IN_KEY',    'EW9NDRxTk6C62vIABufH3a4XttEERJ/DaBjfZuFiTyM+bw6VI/95OrUeXuOkSJ6rlbkHEyeA4Im5gP+DVX00NQ==');
define('NONCE_KEY',        'kGvJ+BN9qn1y3P4u0bFmBLF5Xta0lGgGN+4JvPHFM7G9yKxuqOKwCLlw0qqclnCViBphbqdApyevpBy5AdqG1g==');
define('AUTH_SALT',        'b+/pcqCtx01qx3rwpHF3E98Kc1DwX28FSZUERRXOCPTIcNEK/MUDiQgQh8WRpRkMCMEpYD07AipTxnr3CLLNPA==');
define('SECURE_AUTH_SALT', 'DQygITe1Lu2BLz9E3CIWvmBy7WFCK/IBPN5ShGwmHxdcgd5zwtXhBbEJ7RigcLlCRYsHZgC36zXGYJe2ScU+Fg==');
define('LOGGED_IN_SALT',   'bnMTCZhny2kM858mSj11PogflI4LxBQswyOqZdlhn9CqQDoWE4FUz8cTjS5qF4xw7bhysV9oTZPGxSQx+pjHiQ==');
define('NONCE_SALT',       'nJcHky0vkJMLpwdkBsYFObtzXCNKhXxE3D0LjByHfubdNwJ5/dUDMxdF3lpO2SvjuyFSk/Rodaw71Pc7h6WhWQ==');

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
