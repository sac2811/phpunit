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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sogeti.qa' );

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
define( 'AUTH_KEY',         'P(.H@suF CI;uDz4tR,4aKLA}h4q`Xaiz8`jqYo#Xi)@]Il5~3JGiO?06Fb5QLG;' );
define( 'SECURE_AUTH_KEY',  'iY%u.9)bW`.wT(QMsl4,dbnwXvWSS2d.>O>eA<(s}cPo,(gi=xi}mkIe)@+4oXq(' );
define( 'LOGGED_IN_KEY',    'gdOV`Nyr>]keiG$Ilbe;_&BQ09N%1O23k6hmJJ$1{Z2lReH@(]w>gLG-8IMnUN[4' );
define( 'NONCE_KEY',        'Q4r}b88^tVFPD+b<M{I])P :4]jjw2uQ y0MYw2ky<wv<3MN|HU2s$cw`@4hOK;B' );
define( 'AUTH_SALT',        'hmBN6M&~6t9rfVC=#s>atAdA*u$d31y;[46!9d7Cz9B3^i.o&,rM6H!|U`cLwp7e' );
define( 'SECURE_AUTH_SALT', '9,~gSuwaPoh&ERC?Hn^oy7tfKX1bY-aZVt<@C,35oMMd={y=.H{:#?z`aLG CaW<' );
define( 'LOGGED_IN_SALT',   'D1Rnbu)eb.<o6:yHf,@;aw)7<M*x&3pf6jpMo`*BSL}xXlSlz(6S2nH6xP!L9z@r' );
define( 'NONCE_SALT',       'Z!U8,G,I.~m0OR-Zg%nR@!d.AD)l|,lkuI0,[l|s!+E4~7b3a|eFx8gV[cjXq$(A' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
ini_set('display_errors',0);
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'sogeti.qa' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
