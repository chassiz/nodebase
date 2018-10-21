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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp3688467' );

/** MySQL database username */
define( 'DB_USER', 'wpuser95220' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vto6JupFUEHmKuy' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GWmAlz!38=6bL~&T9i:cCo|? 7psb*Q~Pk*0~`*sSVb`*1:vz;dU9c~G[Z!lXeT2' );
define( 'SECURE_AUTH_KEY',  'wMjI<x^KJVLhpPx[MgZRQ3PJ^YsH@{*/-j%xe5:ktC&{P8Gkrhy6EM`dKwHE{N?)' );
define( 'LOGGED_IN_KEY',    'J_vFdDTWVc$!+;W7E%2-RD%#xVr6Cbfy/7_Fq!IpD{qp5{IHa@Yp,FFQ>i~AFpY5' );
define( 'NONCE_KEY',        '`%Z<B--,f_)QHKA:eY_PIb/7#}Q9=lL[?NpHshW_ny&TmZ%em-3A&Bhz5/<T#H|7' );
define( 'AUTH_SALT',        '-~C` |hYnmYiHl=R2tF~^Um-6NiBw{lSxG$5=B]6VJBKro-]KdpN~UHDSsCL=>*<' );
define( 'SECURE_AUTH_SALT', 'ND@vCfzoa(aA_ptyPtcfGkq4*LcH4?pEhTFZ#[9Q=V:Aj{ZL:x:sJaaJ;zw,_4Ws' );
define( 'LOGGED_IN_SALT',   'w*sT6dDj0%2rZ@b..k0 S2}F@]?tzYum!x.5IJ@J0T0MOJVtMF-1tG9ve29O=]WG' );
define( 'NONCE_SALT',       'wt{>&hi+-##]R%Xf(gKf~iPY_vs39xs$LkF+PEH8{0y3N/;H7GqAiHooEX}<TXt;' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
