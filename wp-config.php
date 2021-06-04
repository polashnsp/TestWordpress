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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'i>5idVa=%|LJ6x.-l;IoT}`:=vx/{9bghJxzl4ZaF>.S`5xlV_~xf93,MPNo:3*A' );
define( 'SECURE_AUTH_KEY',  'Ph[6k%g7X-2M&{NlmpECIj+slw5aT{e(R0CnFw?pX]B7wo>yr7{4J~t`z]YF-7:B' );
define( 'LOGGED_IN_KEY',    'D`;MUcSsgq8$W-9q|5eUsmo`CdcLqXh[g*K#-I<Ioc$WWMaoSb+J[^$;|7h4Rus{' );
define( 'NONCE_KEY',        '+N~8SEer;ruH)+M~NiheZt$_2x7Meju[/W0VW Q)NuhD^y[9)?M&keTzDbYYX>7)' );
define( 'AUTH_SALT',        'sD0x}_yRD|RPtyu4|Z[#O5R[l@o]P!9kLIP+<NnRNIJtFeDly$k@:_DamOq_~dq<' );
define( 'SECURE_AUTH_SALT', 'g,OyXj003*oDL|vN2&_Bc,fLy)`&, R4!FC0e;POkO{UD?P8-b(?}^U?ed-zBr%7' );
define( 'LOGGED_IN_SALT',   'iA*7HZn5xd1n)uGKElq$%SndnORrem0HZF;fn?&VJ#=bw{>yx%HZ>/uPV,LqWT9i' );
define( 'NONCE_SALT',       'T|hrZGB8/Ry6P9r);$+X)X#KdNVIOVp1NR(mVwo;<`C,O^xd?% 7$M qy4_3uFj4' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
