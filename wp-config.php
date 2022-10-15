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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'estudiodec' );

/** Database username */
define( 'DB_USER', 'estudiodec' );

/** Database password */
define( 'DB_PASSWORD', 'estudiodec' );

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
define( 'AUTH_KEY',         ')^N(K^O+TOz!Ig2!tQJ99*(^;;Fy`(t_SDf$:pb*JzAXm)MB9E?5Vo3/SvQ<gTh3' );
define( 'SECURE_AUTH_KEY',  '@PVBB}Q(^0$)u[c}+Z{8ZMdgi11Ym}8].^:^qXw+$XbDLI0%YK.opy.pKN8/(2XZ' );
define( 'LOGGED_IN_KEY',    'xxZ=Z5[yHL~idy,O-=2rr !SIr1f} 2ax)45Q1_yREiIMy/#D.,(UB)%kVKRGlJ)' );
define( 'NONCE_KEY',        '{p(@Wr^L0fv:b-NPU:~T!0ScJ5xW]sbf%X??! J+eNjbXP%0S,U[<8e$np]3xhBc' );
define( 'AUTH_SALT',        '*6K}&]{F;l_B?.jH*+8wGq`[fQo~!dNgzi~|ryk`R$NTNOESk;PLeHXP.fra~rz%' );
define( 'SECURE_AUTH_SALT', 'bSy3D[O9GtIQrgX?Ogq4~34bT,4MCnSXfC:e4Su*be}f#gVgbO%Q@93!&*~}tZG!' );
define( 'LOGGED_IN_SALT',   '7UrA?SB;>px5cx^c.j)R7[01~Xtc4^)+%%a;Y~FyD.9H6]ER$J}2Bc2v9O/MAL]t' );
define( 'NONCE_SALT',       '&5H$RD@0awN9mrJ-D/>A?v7U^J`I~YY ,zgghp*K++CYE^2E(EQRO.+v$w3)_p3C' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
