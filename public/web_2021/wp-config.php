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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cYPS-m=gXoZVE6HkH0{6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.cnR*ygU?ihtpOQuqE=nt Ikt.;iL+uYN77INoaY}-WY.,Nof,Xb^!.S4q.{*|_l' );
define( 'SECURE_AUTH_KEY',  '19SeSBOk=DAT.ix[yP}1y@pI@bB}TTg52TTsD]!ZFc5aMX/j|bT&bG?(@<q++P3y' );
define( 'LOGGED_IN_KEY',    '_~.7>)[lP=/!,zAj@WP7m^`;E]RuG.&^I 9Z:9/[9v=PI#ou d{rQxJ7DHHqmMAA' );
define( 'NONCE_KEY',        'kkYmt_fGA[8]x7+h$vJo7#Lpn_U[P)9HAsALIYUQvRHWNfx5tvZg)2H.pz.cykF5' );
define( 'AUTH_SALT',        '!R(K:aN_/~aIcrackAGyPj]WsFysUX7^vT4!q:d-X5`,DmxrS(Tf@*7!4Tm |2AU' );
define( 'SECURE_AUTH_SALT', ' @z&d+(KIL0J+$PK||Mo{wQGX9<x^w;|,(`^3-q2W$6N]nrQ{4,6o{G{wS$hYA/&' );
define( 'LOGGED_IN_SALT',   '?*1e)C^Wf;WFZ5>53L)2eP6FJ3?K|4%=x6&MGV^<o$5OZ.e?u3$#xbwJp@8@O#K0' );
define( 'NONCE_SALT',       '!UArkj:T6mw`BpI8-`=8nuCc4|y0K6&NC6%[vGcA7U>P$-J^UdOi$cP$.N@VZ2_F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'web_';

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
define( 'WP_DEBUG', false );

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
