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
define('DB_NAME', 'mandate7');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'b=yazi#B{I$I3zR%CA|A8Ap}VU5N?]M]br`{&_1kN( N,0O!{!zii9]2{Lx+}yB]');
define('SECURE_AUTH_KEY',  'XbpP7 U2jJk+oDbd2TONJj:/e+spdUg44J85+AG]=UY LFNL&}a|rH}3>~8dZR$~');
define('LOGGED_IN_KEY',    'Ldqg?pc<]2|}m,RGm_U8@|/if>gwQH|]-^oLe:5?_F5Mdlw7Q/X,;e|Pk?KYo+%g');
define('NONCE_KEY',        'Q+!c66S|fh|1$|UFZ=Y+~.|+rPVrv|g.qYx8F>ZBxaunlM|6)cU(1ZH_ATV]SI0q');
define('AUTH_SALT',        '|HL#JItGt?[JZ9BV$z7AsIs&1/+Kj<rqFak/VH2:BBOa1qX`A!Hcm@wOev/VdU6^');
define('SECURE_AUTH_SALT', 'M^1Is+9ZnSSTy4!3!SD*n$K[t#V-U GU]HF-U~<jC:rz8 yyz+NYg{V[5v#nz;+>');
define('LOGGED_IN_SALT',   'kx7X)HS|%kGJLMEJ`&X/Ck*h|^w&MXFA.?/A0,HrV)!bGDHH$~h(G/@&a<`HB1-Y');
define('NONCE_SALT',       'ADPIMG),0svL|8_5eh|.hGa>:$9w>@aA|m@8`UVa}BU#`|Z|[yG->)q|]6eJe|>q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mandate7_';

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
