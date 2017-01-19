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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eloanass_ss_dbname60d');

/** MySQL database username */
define('DB_USER', 'eloanass_ss_d60d');

/** MySQL database password */
define('DB_PASSWORD', 'SYNlXLzCp1o8');

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
define('AUTH_KEY', 't>SB^jm_tmYptNbwP+&GHHu-ko]lDRVc;VZ)sG;qpkb(jmZIIf/IExIAma;POC$p^-Ahz%p;oJe?Ru]h=Wxpiey%m)}FqBhP;IMedLjmmN}yAZpl?UR|HSc|LV]I!>IR');
define('SECURE_AUTH_KEY', 'DvE-}vVOJBu$|Oa^?*vSTQJvIEo}yP*P;BncdZsDeBCP|OIfmFf}Jh|T[X[NB@kdAE)v_RtGvFQUyS]CD&=y@SW&p/rdF+fCaGB-lmf+FvMMZ!E!x-;e(HRoVvb$eFrU');
define('LOGGED_IN_KEY', 'IR>xiEy/Psys_c>FHh*a!ge!nAyjcQQ+C&gsfzj|/Qy!jqST}AP}e>F{?^Ub/!I/bAUjrMQZ&<g_]!!S@j[=hYS<F<kwD*Al_Nbw<CcLc@w)xELHl?}]y|;k!jZPHLDR');
define('NONCE_KEY', 'P*FwBcPF!q=YeO-%iLxf%{vD=|b]eC)Xfm(EG-/JZtzmt%eZB/[dwM{oZ<D?pmT)xjcS*sH<kuMWpqzr_HoDX*TslCzyITVQdN/}HM^+-_hxjDMop+WqDDDDb)ds@!|g');
define('AUTH_SALT', 'c}%EQAA&*X;RqC/[C%LzURodEpzrN>SvUu@cLLMH]h]JBce_|DE|y{/@r@P]xWE@GtFb%Fytsnyt)jC+LP}}<{fK+<Il%H@OGX^qvH_nTSGg?<Tvk]!=ZGht@@EJEHyl');
define('SECURE_AUTH_SALT', '!me$V*MLwXNr)=$O]Nx+[_mvr+;v)JVWBahsZlofG_Wv)Q@_cMoL%C^xwSTY&VEQjL>Kyq&B]GJXUVBbkHCrOv=YOLBlDXF+-I])B$<hf{%{m>D@G/Q$iz?NLvwvo]GA');
define('LOGGED_IN_SALT', '(sDEthN[(HgFq$vpsJcP(Fj{thf_CB;Mz/(P??obNNim+co(jk<zbjaAkHT{;P>mgrCmR*%Fs@yWchnY%YNINLla$Z[;R%uhMwGjJBna^<aY}[^[dKed;[IfNausUYUd');
define('NONCE_SALT', 'i*gFT>*bGiVPN/vromew%a/nxsO$W/q]u&(!J[yj}q{+enPD>vdx*ehd;rCP-CvmkA;I_I?A?xMlTs^-[S)$&e^spyusjUx|d[DxPYEHc-ftkF@u@&TGjYPv<jgyi-Uz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zznp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
