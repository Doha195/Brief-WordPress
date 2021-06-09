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
define('AUTH_KEY',         'DE8tCED6ZYrLbkn+4dI8jB5U2uIStxYte8v9eU6xqGXtY8WyEtv2kEFs7IKcPgYoD0TWwV7UpZRZQ3+SSKfkSQ==');
define('SECURE_AUTH_KEY',  '2LxzCREt4mVhMq/HyWWW2q5SynffZWWUnqim+FjQepnbq/Sqp82ve+V3mM6+za6kkVHMP3kRwMWt+nM2gZdzJA==');
define('LOGGED_IN_KEY',    'WZg4qGJW1ZDKArcM/3Zzj/g/zijoR3c++o4WrDlPgzmrXthyNBDQuDh5I8vxvcDO4wWa3yvuodmBNF0F6xOoBA==');
define('NONCE_KEY',        'fKq+kT+pfPPin9ve3TcXGkzbpbYCSlImrjAuEGmQqr5OreIrw4i/eBx2roDB76xvAurGA5gDAflRHd4N4fmIkA==');
define('AUTH_SALT',        'qBBTMP8xA7CqSFXGHF4rrxfkOpD/mrD08n1Wm8a68eH+orEUWPDo7rf78aoKUBZfvYshK/oCssGTmT6KbUEqDg==');
define('SECURE_AUTH_SALT', 'gapC1c/Hcl4+4Lm+YCpribdrblVzb1iwhZj2zVrZcyyNkqJuwIRySQBCzzY8VJyU8GewDB7cflAK/PAY0EQNrg==');
define('LOGGED_IN_SALT',   'NjefQEKY2uhwbUt+mMz79IUJ0+fXqw1NKfXSYwaDGr0ka8I8sY2IqkECTaY0XUnxYERW8YKsSQ82dULTDD2KrQ==');
define('NONCE_SALT',       'BK/RNjCD6TSf4V6HGW4Mr1E2MqkeS7kjl17LlchlAKl+VnutMmK8HPGHRC322Sp+SniKg4UZzv1qEXQN9xwXbw==');

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
