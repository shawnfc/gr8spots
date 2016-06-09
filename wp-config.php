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
define('DB_NAME', 'shawnco3_wor7');

/** MySQL database username */
define('DB_USER', 'shawnco3_310');

/** MySQL database password */
define('DB_PASSWORD', '0tdY789A');

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
define('AUTH_KEY', 'x{JAGE!r(S$XO%F<wm&FH{F^<U;[>B$oCf*HtWSnNZFSA)vjS-]UBVh+(+i)RmpGSxGzARA[AFCpSVTkr(DeU[AMw-rv^dozIosjtbzMy>+YWVsLNyny?g/pfH@Oijz+');
define('SECURE_AUTH_KEY', 'Xj+EpQX{byR_+$yHFy|=uV;dqe^x|T(|>}mB*Ih}CfZu^Yoe_hL=efYX@gXZ/F>zSmTM^fAEHQH[p}TZr&]cI@K[z%]-+I}sKFJU-u+(on-ATsfFCYtSbKKSs^(*$nJh');
define('LOGGED_IN_KEY', 'r|s-]*N-(cDCn]xf<XSH(zva|qH?&ZFA}R>!eRXPXhJ*?}sgL[j[LMboUESjz@zRJMxqFXnj}tKVd!icBFL(?nFfDb[_we?t{Wm>XEEfBw[|^pJ&WN=_xseusUuxyulW');
define('NONCE_KEY', '|Z-YKwW(HwkUUBg?IH<<ttWdF(}]Nx^tqWYT^In<<*^F_rEYjW(jRaQL=A@tOl%k?z]tfI-uzzuGW{^MC[s/yru[BoQ-]Mkm>y(F+yfbnDimvQ^BorhKg_-qulqE|ps+');
define('AUTH_SALT', 'kEyAK^y*Cpy/Mp/;TFR&Z%@>J)zH&d)cJb/w^QnjiZnP&NCfNlDIrK[gMmJ/CTjmg%!-}iH=Q]Y?bFK^tzGdoyjZrQ-Rc^RWPr=?zmqH{eHBQHry<X[uBO$_rM=Em$Jc');
define('SECURE_AUTH_SALT', 'RwVObS=xmQUKohgBtGF/j<@jtk^wE]_uJMvZzFC!T(C}cfAzZ(OLexcR[Pc{IS?|-YYBCRW%_wSV}m$>{p!F*X;t}WeA=mJC]twLX<Ftho(%;WbRPFpoIO@/oX&rK;tu');
define('LOGGED_IN_SALT', 'MA;+<FD[m{kb/]x|;M?G+;LwIkb;uoSMf=L_dUd>G+c!*GSnniS>c!mEj(%>UhwQFI}pYq/_)sAZZoHBklV;e(V$*JF}>k<<MoDSn[]$M+AxTR!uK%>S*kw*[IR^}*++');
define('NONCE_SALT', 'XEMw*E_<pk|RHa/QgBi(zOP[u{KtfZ!ujlA<%&q>[wNVTS]qQjcJgpN-gg$h|b>KSM*<Tu|>nfbtLI&n%uh]|}{QA|G*x)(@C$=zw!h*&$@IDEby+QGJlCj$FNAS%fmV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_prng_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
