<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'pdW7--@F:Hl3-eJ<Z+jE/w.~@8]5dcRyYOA;#u>pnac[P rc2jrJmIGbrTH9>tap');
define('SECURE_AUTH_KEY',  '|q@/IG3+<}?Dffp5GhRv%D.-}cW@3mOBhO!&>]z`J- c#Lo{B k8{R:LD}+%7^)(');
define('LOGGED_IN_KEY',    'f<KxJOO<9LI@Wz7jFccSS8_a,YoF:eiXk1One<<*!zc_d:E?uf!5`04AR.RvU?BB');
define('NONCE_KEY',        'X7vsDisgtzX|K>F?ex44Q;2w$>hy?s,-Ylh5pqc=/Siha{cVC8x)haO)Qu@a5[GY');
define('AUTH_SALT',        '%9;/TTUFG/CA>n4PCpB(:~!R|-_PsrsLp*K;i^jm.xvP,j.q.51!; rce1IZXGrC');
define('SECURE_AUTH_SALT', 'zzJv1}Q+T0XiPmw<e`(,5wJ:u7[az?50gEH PGr$f@MieDp/nw*W>p*W([tPc9ft');
define('LOGGED_IN_SALT',   '7/q4{Q0!/ec!aS6,d^Jb iDx)~[k<df,M:Wk=tuxzoG)=5%&6V1j802m6]g14,v0');
define('NONCE_SALT',       'I_Ou#C*+2mw[#OLL!QnTD6wVDUh1y*t37MaI>OOcBU,4}pw{f7f{H1+e.~Hma!mF');

/**#@-*/

/**
 * WordPress database table prefix.
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
