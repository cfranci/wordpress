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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Yt^s(T)FW%C2M2$!w-{K8<M3;ht,z|7xuLop5~c~Q*wB}g9i&TkuOy6A/*X:&~mT' );
define( 'SECURE_AUTH_KEY',  'UO2&{i%& pWCyGB^DLarHk4[42~}0!7&[LY-3chA ,JbyS)U?mL]t/tH/iq(Fi=2' );
define( 'LOGGED_IN_KEY',    'Zn;^9#;Weq#?03H<U?gbG&c#q3]~[lnVFS}bsRYK0aweLlX.}10Z=4=}m_`eGoEN' );
define( 'NONCE_KEY',        '@an?jN;=0V3dY,? B8c~)iB_Q`Gv_`@ysH  +1(0TMV:KS&x8`X98diY*qBRy?p+' );
define( 'AUTH_SALT',        'TYL3)~_<5|2VLKg,-,dRBAQT^SX4<)vW1sU{ms|d1pmSuDt8^phGB/=Gd~Ho{$4D' );
define( 'SECURE_AUTH_SALT', 'R_K~9R;B){15`O*~OC2R;I6+ cDP}RE.t#0V9F(r57AHrPUML}Ag)J1B,IJ4*Wa9' );
define( 'LOGGED_IN_SALT',   ')Wr ~4v[.h<872ole%@Ep*.llT=(t+j=T%]OoXRT*ZNMBfDEz5E)R(U/l$YS6{vr' );
define( 'NONCE_SALT',       'z[ety,~<G2nZW[D?geE?%]jubg]rA$j4E1Ay:/-&ixQ2?u9l,~r))no ?QK$o2O/' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
