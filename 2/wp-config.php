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
define( 'DB_NAME', 'shamorfc_wp1' );

/** MySQL database username */
define( 'DB_USER', 'shamorfc_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nkx1R4E06Huo' );

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
define( 'AUTH_KEY',         'BM@4FN5zMUqzn;_z)R+Ql-Qnfz`c#e(F[piNNA=Yq}qVn6Tw1*ZNiJDbX@ZQNP5Z' );
define( 'SECURE_AUTH_KEY',  'ZH_&ry|c*s-Q|tFA,|PL-*f~VNL*{gy<oKoJ,D-Ub/JjuGwv_OWFi! n<%QfRknS' );
define( 'LOGGED_IN_KEY',    ',wB?]Nf#8kM8UB[lk@&8NEFdnruUsp(Y<<fee;?|>9}+,o8zq/D8m&@J~4-j%<?W' );
define( 'NONCE_KEY',        'frD,Ndi;}4)=j-K*g,0i_/V8BwzGOHDC%2s8Hite/qd<3_ZU1l1yHaKu5b@0_^WG' );
define( 'AUTH_SALT',        'k21RU<VI)#!)ByMLFH&MI|3]tvW-,j:oB=Dkq4Qz[M!J?zuW97T#V |@f00G~Bf,' );
define( 'SECURE_AUTH_SALT', 'h2tRmg71o!s,M[ZNH3^Gu=3-^(1Sg`$cZuvr50Y<0aoXD#GtH<V4W}7$_K>1sI*Q' );
define( 'LOGGED_IN_SALT',   'A]8aNR=Z(HF:L6XC#QqSoF<>5t:2=[Cry^3.? @1t:#wr*=qw[dEu;Hl]l[UH_bX' );
define( 'NONCE_SALT',       '.D:<o;R:H+<6?TxxP)zMTbg,(0o`sdk[,^D&S2AZYUm`WrwF+icBi%Dg1B!a:F.!' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
