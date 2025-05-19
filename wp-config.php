<?php
/**
 * The base configuration for WordPress
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 * @package WordPress
 */

// ** Abilita la cache ** //
define('WP_CACHE', true);
define('WPCACHEHOME', 'C:\MAMP\htdocs\portfolio\wp-content\plugins\wp-super-cache/');

// ** Impostazioni database locale (MAMP con porta 8889) ** //
define('DB_NAME', 'portfolio_wp');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost:8889');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// ** Chiavi di autenticazione e salt **
// Generale nuove qui: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'lOD_-Pv#/g%{&&G(d&pE4+SS|z:e`lyvFsb`8sV+h[+ n==>!b|,g+-8#E+^}Tmd');
define('SECURE_AUTH_KEY',  '1zyz^/}*zYFvMMwt=MRZAN_(+Z<hqqoj2`kvaPi,%SrT#bk.mCMv}j$B~Kwxl$5~');
define('LOGGED_IN_KEY',    '-(&LutA+AFRnm?pdOQCcU=>:7?Bb7cz`~;36.keG-/b20Ni)n6(=xS|7$+}bq<#C');
define('NONCE_KEY',        'H+W@Iw_b{Pz?;MQ|}(nUf6yj6}k`^>|4b#hy@5VD]YPE1Ix}iM0g?$>q[J=BYcnl');
define('AUTH_SALT',        'z&QrNQ-L@Zd57[g.k,on2E[/+y>L,UL}9o^QW8[_9<p$-w_l~L +Y~qsGpF7U t6');
define('SECURE_AUTH_SALT', '`.#YJ!#J&_mOCh|nKQW;w6 +TuN b~US.NRR+<c|94D`CjFy^g@@agG,Azd;~koz');
define('LOGGED_IN_SALT',   'b&4zv~|,PfCtgoMY%E`p%`T24@9paPUt1{:xP0BoA;&?[mF.Gy[;SU[<);|)x]mZ');
define('NONCE_SALT',       '2FUnC iV&_YwNaBO2y-X)i4xhNo/X!+Pk<+:]LxT;&~EI@/arejg;oP*cKo{y$pJ');

// ** Prefisso delle tabelle del database **
$table_prefix = 'wp_';

// ** Modalità di debug per lo sviluppo **
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 1);

// (Facoltativo) Forza l'URL del sito in locale
// define('WP_HOME', 'http://localhost:8888/portfolio');
// define('WP_SITEURL', 'http://localhost:8888/portfolio');

/* That's all, stop editing! Happy publishing. */

/** Percorso assoluto alla directory di WordPress. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Imposta variabili e include i file di WordPress. */
require_once ABSPATH . 'wp-settings.php';
