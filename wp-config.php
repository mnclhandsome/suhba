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
define('DB_NAME', 'home');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6V4/SIP,Z,LC.OLOq6`_%f9w4A)lHo*sLG@@f=[f#v.kzT)z^@Pp#_!+}0rx)>~H');
define('SECURE_AUTH_KEY',  'iw=^Un4ddIO|S(QdaUv*W7B$-nZO1)4Q>^V/yXnZix3/B`,Ctk=; 1?XC##p.eW_');
define('LOGGED_IN_KEY',    '|IVil4kD3qUp}<:?ELHXlNny~98bZ%*Bk(gg5CgH:!`s^-yJ*JV+!%rcH#$~m~<#');
define('NONCE_KEY',        'rj#m7GtaZi#WJ62*zoyY$NZkB|Qk-)I.p#Af~!%dw=f:1tb_#jmWw^LcO~ZqZZ3m');
define('AUTH_SALT',        'xV5x=:nsn`P%*@:ZH-@P|&Sl#;Q.~I522ER)GID3fb3LJ)8Ff}V%M/k3*B~@W IQ');
define('SECURE_AUTH_SALT', 'gNb<i-$fH# -A}-v:B?}WLr6t7Vmyf9rUE9*Ggh;F2{paluZHPMZPT~U?Uc!|Szf');
define('LOGGED_IN_SALT',   'Q;H-*M!m-a_0:B4$w~mX}Y 0zi!6&GyM9=w6F]&uz*v|P}Trj8`dnT6KaWGTzx==');
define('NONCE_SALT',       ']g6#I{Ol+dE/k-y+KHZ)kD09>=m8J={bK=PHzc>u s61[,|fgp8YodwBB}T|aJ$4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
