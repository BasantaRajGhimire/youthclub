<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hamrosyanja');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Nepal@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>zsHQEJsFKPePB,{z0)<rZA)>?(?l=q1bn2X%Aj?kmV?ZtEnU4o|md6{nb?<]wWU');
define('SECURE_AUTH_KEY',  '}/}}~mhvS&[^sOLcS- ~)n+*5p?=MPiX4|?dZbG1)3_L?4yU:IN2JF.Y.Ju~3bMi');
define('LOGGED_IN_KEY',    '4Ll+wuiQ)I^QYd3nAg;i+GL1}&/zs+i,^J&9Vjt7Jg+!/Xec+LX<b:d^0NYN65?o');
define('NONCE_KEY',        '}^5Lu+^lgx=3.87BQ2b$~J]iaz`)k_T/6DTR0g,5h$;H`[TOv;I2@Zqq%<^^Q^Dq');
define('AUTH_SALT',        'PLvb&gjyA$1 <&9}HV,QXi~4=`h9v`e ?CH`Q}n9RWJX0I3(Vz^g04lhy5ir*IeL');
define('SECURE_AUTH_SALT', 'g6m=h[tsi$3{KlDV9TFF8$9^Mys&~&CA[3W)P:[^dg~><ww.8Ugg&Z(=#a$b!=9}');
define('LOGGED_IN_SALT',   ':.)=_^_f3uQV/}s|:[V)*BagqX$4^qJ%@eJ&UKF)yt=cR}<0S-(n` lOA$,2;-zM');
define('NONCE_SALT',       'BLa[bG;v%M0`rB8k5VeDh/87N$<(0h:_CMy$ixB0H#q1dU;-s++~LD@|~Q$|>+Ma');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'syanja_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
