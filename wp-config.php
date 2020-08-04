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
define( 'DB_NAME', 'nathangiesbrecht_db' );

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
define( 'AUTH_KEY',         'M9f),AR$mu1wm,v<B8k#ItThYLxWU)V:Zw uD4kuurs<dOEKB57U>?OJuR%#yx9v' );
define( 'SECURE_AUTH_KEY',  'Vt,e&v-W7TTqRF~7fW!!W(OB,.(>spEs8tTgh+gyh5!AEBH &C_^m;Fv[U*;UVR:' );
define( 'LOGGED_IN_KEY',    '6vWEzsz!`i +F/%wtjHuH0X!-}+c6=C/^zD<jxXaI3aaJ}]/v@ghY7^C,)SU&Ns-' );
define( 'NONCE_KEY',        'DxBSLKz:V-(/pjIbyi3F`(e}MXz;R:L_$_sU5-,O0lQ}6rTspixVG^tyTHv+7YPG' );
define( 'AUTH_SALT',        '37=jM~@I#v(ql.ks_(?+a=:n`Rsp9D;@6R4TD3Lx0oPFU1*yGX9QQ<_>Y!2<0K13' );
define( 'SECURE_AUTH_SALT', 'VS>D!$JX*ytp(3TJ!r@ v)?~{<+U!Jp[>~):*;c N*f$oA^ct#%cIKQt]:.P5|Q{' );
define( 'LOGGED_IN_SALT',   '#tBKFK1}5TB#S?,V%4fB`!0Wftuc<&-1VH]&PfxQqTs2J`^9m!fl,K+:6^HLD8<6' );
define( 'NONCE_SALT',       'D,H<GMbboRB7xVYi+Q*uLS<ceU-e[I/nZQK/bV_Sv`$v&TPe2B]KaiO#mduocj[Y' );

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
