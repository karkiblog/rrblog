<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rrblogs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '`7{?%ysMM@;))bn~Qr8r,=7wxGmL)qE2h9><gALlP[g7yln#q!LVsOB2s-=P<U{?' );
define( 'SECURE_AUTH_KEY',  'C:xk}U+/,>W;2ix3`8w*yUI~Xupvk?7HFU`7b=S.y@nec?H;=PTkt-( xmYnKy)/' );
define( 'LOGGED_IN_KEY',    '3[zfeW}P_~2fol!pAE,G^a}x#M)FcuGBt$6eT;1o6v1!?Ddme4v3z?ZL+`0t&8Dx' );
define( 'NONCE_KEY',        '3:V1m4TB[`eFCiam)>_Gi<QU1n#x<]}5G!zr=hY|RVg7r-QS}|=$BW,R}oAJU_s?' );
define( 'AUTH_SALT',        'rw}<6KeMu>6ZQ]SOU18NoSm4~u>[1<!;-/^K/ =T:(wypPF%>2sW.v)9<GFp|7.)' );
define( 'SECURE_AUTH_SALT', '@lKW:v)iyh7`Mrsny(u^UKNLuw8y*16h+1s|WYV#U(} oQ}ygLLx;m^A_(H?GD+N' );
define( 'LOGGED_IN_SALT',   'E_&LwO;bJN[U9roK-#r8}EMDT)f+A6i-+wkD{U0C?8[IS`([&H.},@p6mpS=2[x ' );
define( 'NONCE_SALT',       '6(W;& M^Tm9ohJ2>hkcd4RFVQo)71|`ltF3KryPF-#]{IM[(kBcy6> KW~F!lV>r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
