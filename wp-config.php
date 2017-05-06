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
define('DB_NAME', 'devpars');

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
define('AUTH_KEY',         '-G$IgV`6x]egdQt0[e:q_:aS-c_7PfC,WXZNrxr)aXkT3:TUWK-iBod{7)`+*~-%');
define('SECURE_AUTH_KEY',  'HMdHhA#fK]/$@d*mC7b#X_w8)jd!)0y[Gl4WE3h #n k)hKfhe|oQuswpU.52AX$');
define('LOGGED_IN_KEY',    'd_MO|RxBr>i=Y5s}Yz4kzWfr&h&2DM^h;$;G6k-cPGlP 02Uk^T_sIGWE7v`xE~u');
define('NONCE_KEY',        ')=<!D,GhC}q}{:U!bNsgU)^nK`I>0AI0RY0Hq5YvvDeAkM/)<Qd-DV*?4LPz|Za>');
define('AUTH_SALT',        'J+1&mz:,LOlAIGs.&<]P-lN%.UV&61Q#c(~z;h:9PfV8wF6Rp5UOrnxX%o[e]4~&');
define('SECURE_AUTH_SALT', 'W9xGKtmX|x^qjw6:B27W ZT2EP%&p?&@4V?n;Y3(]L0!j|1M6w10C!jLX> %|zjw');
define('LOGGED_IN_SALT',   'O+m-/)=KCg^AG (8)Yz7&5He+:YE#54-T4HBL!C64Fu n-i{(,/*X~JW2Mu-[i.<');
define('NONCE_SALT',       ';#o_0S+/*q/yt{|(>ny[jYu}*B_n[%ZcR]Zk$8&8^=mKZ^6rWPG+PxAEmXvOIw`Z');

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
