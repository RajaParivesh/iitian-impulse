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
define('DB_NAME', 'iit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UBIJ9d%9E;E3c&YQnn@M-++>r4JUgZh}x|&b))gj8b-U!a^tUHmJE-X;qS7TE+:2');
define('SECURE_AUTH_KEY',  'JL+f}nqdiwG,Vrq]S>@{]c++-|6{Y/6A`:Yk|L=xbu&i-]SNdg5Ij]&u(+b!], p');
define('LOGGED_IN_KEY',    'C$mgfyj^#<O[cc23+P,KU7^_|zNm|;gSAC9xVo|s=CW|RI+W0)OPI<2 5w%b,5Fe');
define('NONCE_KEY',        'EQ&=RWI1r(*b=x7NkP_+v4POa|2aiBo+T8=w.78f4LsV{rz9|=_^CElQb:s6^+XH');
define('AUTH_SALT',        '72Xb3Hn=L[V_&`KXmWT#oCWLuO:w4w-;?+z{/*+-Ye<:*R{&zMxZ@g>Ijko}|$Pm');
define('SECURE_AUTH_SALT', 'QMSODo%vj,GwF<65Mz,,(?`&G+FaNXP@vQ<~~(9brN]7H~N}%TI(z$ZyWXK%OTa>');
define('LOGGED_IN_SALT',   'Ey?qY]-i+g|}Z}1 4+;8J|S/FZcjWDauFe,0meRYoea-(M@rX%g_MglX~TC>fpXJ');
define('NONCE_SALT',       'g|`1D-ZVq@o@sRh8::f+h=H&(9RwKPFhp+|Vc#u!c+/@LDv=b]:@v:V<)/{GG(xs');

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

