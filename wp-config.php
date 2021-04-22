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
define( 'DB_NAME', 'ws2' );

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
define( 'AUTH_KEY',         'e,+y+$NSoyHXTpKrMN~CeZ,|a~r8C/v9>oYE@GH-<np3SY>:P5*ZF*9W[Y&&ll&!' );
define( 'SECURE_AUTH_KEY',  'zsg&rd+~A]Rk[bn&.@n&r^wKaLh(A1`9UEtF?bSv{nx.r%&vJRP:zOv}PrkC]/Og' );
define( 'LOGGED_IN_KEY',    '7Sh*SFZJ@1^5nE5Js5@~B[S$q@D(l3UMR7pMY3x}@xuWMA>njLY#Rl0eiz8yHcRb' );
define( 'NONCE_KEY',        '8+US4:+|y:7Db}nZXpV-YG=XA.Yyq_*DxB!KxsI8Rox~Hwk|+pNhV^K_E4Q_LS K' );
define( 'AUTH_SALT',        'S9e*!tl<eb=ugzMEg}rrU+VwR0#r),4Z#]{l]abmsiCt`BPEJK|?NUP*ZLCZ1V^n' );
define( 'SECURE_AUTH_SALT', 't+HK[5gj ?4ChL92h0iBRUBBE% ~/h[;0>${{adGS.Z%,%k2r(T@5e?6#ye&eAPf' );
define( 'LOGGED_IN_SALT',   'w8Hbh-[OGnKbiw5~Y<MIef J?%}6@hM8(|Fog4rfcwu~B7PjVEpO~Z U2QI8BLG%' );
define( 'NONCE_SALT',       'y` BHo7:Biaxn$e%&%1>yyVu-tY#p<  APNg(]xgtVA@Cx3mnu>bzwV19~O_MUQ+' );

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
