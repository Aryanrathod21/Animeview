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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'obn5_*qjJLE=DE]*JMdu/zz5x1{XQf`;P~sg&ZIE*.E9>Y;L<C>M?abI*ve0;6rl' );
define( 'SECURE_AUTH_KEY',  '%k<9p%JK7#qw1I8p?&1Sm{f,~Y@t3]xAud7Ee;Ni$kTAR4A9%Rs: ]LM4naW}Q/k' );
define( 'LOGGED_IN_KEY',    '~=fQ(_}<7}c)g]Ev[OvfqmK%?5br<TbJV*Op:Zb6Mz[{7/jLHhdh3b2I#YQZ@,3Q' );
define( 'NONCE_KEY',        'Wqntdd%i)Qo(jf&3Fc8[eh{?b!.H2]AW4Ug3/n9uqTocz5kQbyZPxeWMz=:#4:6w' );
define( 'AUTH_SALT',        'Nrij=R:A$OYg_!$/sRQO>-N.pn;_CNpS1Y,D.@SzBZP00or)3N]:{nGI=^Up`/0+' );
define( 'SECURE_AUTH_SALT', 'VyYi8SfUeA]ObIbcLl=9u53lh0}?qT5f Y,VB ~]lMmF/7vo5Uig(f+$mR+DlU.&' );
define( 'LOGGED_IN_SALT',   'B8uRVQxxj%gkl+$t7HMl>B6<@@aKlm_v1i?y=b/c1ND+{!q!oWZ;U.nf,6Y^>mua' );
define( 'NONCE_SALT',       ')74BQ=|hDGWAXeb`_{9PWM>7N^OiKQ,DQ1#W`u}EI~{RN76V} _JIb`I>+(0r]HV' );

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
