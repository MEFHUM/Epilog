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
define('DB_NAME', 'mefhumor_epilog');

/** MySQL database username */
define('DB_USER', 'mefhumor');

/** MySQL database password */
define('DB_PASSWORD', 'Zulu.1545#');

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
define('AUTH_KEY',         'QUQq{:j&H-FQ`!s_},2DUmZwY*D&pm`#-=cRj?x&;eRH)4j}lLMnDg(=+V%1w%_Z');
define('SECURE_AUTH_KEY',  ';6_qPa$m${4Ot}3$j(|:T!_JUKp+AHSjgq*W1@CCyaau(f)_`Y{]8J:x[42iVy<%');
define('LOGGED_IN_KEY',    '5NH9z*><nuva[Nx7Pt!;ywD0o>W:2M@1LuF*7nvxCIY^{V<PgpyPZ%We:)4b&!m!');
define('NONCE_KEY',        'C|s}UI<@./$k(133$7~lThrIJ|LOV:+J:6n`?<v(2:IK|wgJ*d MQ>lf[f*f+HwC');
define('AUTH_SALT',        '/z2=XK?wTI#7K__k6(SJPod)352HVXoZttRZvF%(~im1G6r/*N-elW>!:X{qSGbN');
define('SECURE_AUTH_SALT', 'Fc:7uYx/5dggL]s%xuS.5Rh+<(}&$ff1rMAEr1j.@l,]Fc)*:#&ZSG0V|k)!ruxq');
define('LOGGED_IN_SALT',   'XnXI_To;{GK2l$|RvsJ!$4(#e?m1~$##Q~^l}Vg*2GP[x?~n4z?G)=T2+=N5^B=,');
define('NONCE_SALT',       'e}^vtq4qaF=upO|agQYt_t]`#)gZyqN~{o!xiKLV0}Hm.lsk|#e~y!Z6U]?9,F/9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eplg_';

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
