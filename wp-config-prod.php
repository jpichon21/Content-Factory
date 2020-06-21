<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** https **/
define ('FORCE_SSL_ADMIN' , true);

/** Définir l'URL par défaut */
define('WP_HOME', 'https://creative-factory.io');
define('WP_SITEURL', 'https://creative-factory.io');

/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'crea_fact' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'fact_dev_bdd' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'tN859wb#' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

//CF7
define('WPCF7_LOAD_JS', false);
efine('WPCF7_LOAD_CSS', false);
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' }CSJx`8YO-_|L)vyPGz@2!a_~7(__uAc9;_<`PiF!(gj$-=$&0,[+ho$Bv/O%j/' );
define( 'SECURE_AUTH_KEY',  '.4E_y|~7qT.-ZMmTR)^Y*~o_Bar/tN&Vc^h|(c%UIz:(*p?k%mcv>pXGJ^pkoC:R' );
define( 'LOGGED_IN_KEY',    'S^heu$zqMNl=-p}wT@d2,woaG!i6;Y|Qymx#VH.Au[=f8}QMj2@mP()W.opRA5P`' );
define( 'NONCE_KEY',        'Od(Un/a0<K;|xHWry^KE&5<H^+6W%|F~/~m#O}Tm/J)WU]q?lo`F,QQ_stlV[[W ' );
define( 'AUTH_SALT',        '#5r-ReuKE7wOI4&3}bHEN>)@9y-%*U{btjtmR0VqZM%j,=z(Rz[cF*tYbDR(kq@e' );
define( 'SECURE_AUTH_SALT', '5j YRwX{NCxeN+*-t7tp3|b*`d4~dD^s$kWigo%1ID;uH4Ey1,0%8i*OnUZ)=Tx}' );
define( 'LOGGED_IN_SALT',   '7$8l?N1y,BD0%2.:To[HZq ud,;7x;Vaa)[n7Sg[i(ez/1M?6yG:-sM>.P>#HXLh' );
define( 'NONCE_SALT',       '7-.nv&0G1pw:19q9Mz^i)N@IY*,%c3DW|)]icH6W$I$arXi&WT=o(OV+)RTCr$~f' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
