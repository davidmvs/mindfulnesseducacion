<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u532203168_efqie' );

/** MySQL database username */
define( 'DB_USER', 'u532203168_VpAf0' );

/** MySQL database password */
define( 'DB_PASSWORD', '0e5LaLtu8R' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          ']XX}rOZ~S{OH]O-nq#OkA(a3TQ$Y9/-hy/+j ]PK%BR4[Rw=W`-y~g8NAmb Tgx]' );
define( 'SECURE_AUTH_KEY',   '58;oc =;F+$HRd0WEW@7f@~9E{F5^XdP9l]S~Inb/Aj<1CrhMts5w<pJRea<:ZPr' );
define( 'LOGGED_IN_KEY',     'wBa._1)<8$ UBEJr*vjT,wi)v=mQ`h(b3hc+LAw:>m#vV;n-|Vhe,XWV_YONs00b' );
define( 'NONCE_KEY',         '9x( TV(<efM[D|#lVDnxk,2[Bx)$v@0%K(WX!F~!~dtQHQ!BKps;{!f*aCK-Z$Ty' );
define( 'AUTH_SALT',         'hVSy*qQ[.Uc:(ox;2^PW#1sbU,=byfEcGSWdf 4u_,1LJkKZLbYqMU.Q+|6G@rU&' );
define( 'SECURE_AUTH_SALT',  'D;<[EHbe3=Qm7kZ.DAY8JoN(Z=2#h+(4R%a]5lEAEQzJ$s5 _g[CP+it(]&CA@7&' );
define( 'LOGGED_IN_SALT',    '{^(pHuqQp$lV*|yr`A~pjphj0 .bl7-_6XI9Av/A-c?QF^{N+1Ni+u0}H}R:4K`U' );
define( 'NONCE_SALT',        'Db|FT=:w<2:8ODntsWc3r{mJ1nf.xZmNC-WAruV^0q*wL}l>?9++}Aq`&bTuEPpY' );
define( 'WP_CACHE_KEY_SALT', 'HU?rpbc(hsT2*z#_Dz20;>G]2[>I,9XZ+[y^g.qGAZ)gXZ&QFiyjr?vW[l*6GC,V' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
