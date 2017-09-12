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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'california-foodways' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',         'uwF$z~{ CV63JGUi8pk.Jx7:>lC}x&SKSE{oSx}=g1TU`v6c?5L 2IL6%kvNI%^E' );
define( 'SECURE_AUTH_KEY',  'm^q /L_$mP85}C!b$kW-5uAq,%v!xcCQi)k[M@?E) Ohv?HGg!a-Z6nmDF,P*D%p' );
define( 'LOGGED_IN_KEY',    '&OlogiS>qW]O!S?fe&+ka[0$uJ <&z<3F6iK-%oc8P3f$_/7Ke:RE%RmEx[0uyah' );
define( 'NONCE_KEY',        'Z!~<>/_Yv*z:1-oe6es.pR;*TJ4`y3Qw)tuqD|bKKAXrOL(Y;0c3Zx8[8AH]6kN3' );
define( 'AUTH_SALT',        ':;vHGnQXBvZuxLOVn+@m:k6/gsrmJ$Zw<QC`drTj8kt9|ld6xi-N8@CuyLGgNfU4' );
define( 'SECURE_AUTH_SALT', '1T][Bo j<=e^OP, rrUDjf#gTV9RI}UP#JPGn=P$_&:@jtCaxaJZ?|@D8%5@Z2 F' );
define( 'LOGGED_IN_SALT',   'VI>B)5`_JaKzKBy7/RC^ga m-)vxGxrX4J+u7~WRU%|O i`^:n ;kIE$I0W%bm]:' );
define( 'NONCE_SALT',       '-5F_;/-<C%LUEl]#5ylxwyS:ti[T)YF!dISRKDWmH`::Y/($QL:CjyvmbC{@Js{G' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(california-foodways.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
