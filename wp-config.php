<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wp_intro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']#j*32~s@#Ut]${nX?q*!4]wg0^9%pn!YaMI9kA/Nc:UJ@w~cI+&um_LG:iMnDzK' );
define( 'SECURE_AUTH_KEY',  'RM5hobP%_[z0*+F)q2?PBVqvbfSvnT^{SXOywZ5m4B ^:m,b#UP]9wzit[x%VbN9' );
define( 'LOGGED_IN_KEY',    'Rou_HPHe:oPdyVhC1&z[:aFNL6I!}w?[&#2SqY{9d-N#sEdL}A](^stu*?Uu-..P' );
define( 'NONCE_KEY',        'I/J-]RJeBW%UK5 K?K*@8*JE1MKOfyj MWLwXg6+H}vtOO3[zAjC#;YA.s+{XXB2' );
define( 'AUTH_SALT',        'K?SjUBiqFv:MrVb^lR%$0I2iKUK+V$L[+UPwXZ}_OpS%J BIqBhN}^.-cR0EkdnC' );
define( 'SECURE_AUTH_SALT', 'm/-PSmtA+<V`Sb!]Y(@<X8-8^/=:^;C6DkCC<PQp;.XZ{}#G!_ke[f+|>0j,I^&k' );
define( 'LOGGED_IN_SALT',   '/n3[ 7zR{^Rk-ncor1(3u(0x+.NH3C8.h46m)&hq5yC4*Tl_Q^I`!Ur{mNJY6!jf' );
define( 'NONCE_SALT',       'GCrL!7_-qfKRSZU/caibE<XMCgS{1XG22ts;Lu=!GGVE+XBI 4oceC)u8Z GIv?c' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
