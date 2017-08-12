<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** 
 * La configuration de base de votre WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). Vous devez obtenir les codes MySQL de votre 
 * hébergeur.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */


// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Le nom de la base de données de WordPress. */
//define( 'WPCACHEHOME', '/srv/d_CM5266-GANDI/www/www.goutdubio.net/htdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
 //Added by WP-Cache Manager
define('DB_NAME', 'goutdubio_B');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'DiepNef7');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Le type de collabtion de la base de données. 
  * N'y touchez qui si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/ Le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        'Y`N3qbzP^l9_eRzeB<7iNqz*,FZ}@`b~Kk}DJa ~>p@J6(^=YKGv?||[;&S6}9X;');
define('SECURE_AUTH_KEY', 'O]cz2cm;[A^&,BNgZr/MYcgu_`vuQhqXt!.s(`2ullaD8xt-y^r`Kz(cr%(Db#+H');
define('LOGGED_IN_KEY',   'FD+,5QZusIZC+rSqf#y,vwoa&,h`=-Cv2O#v;r> *y%tPKiBU4yZ(Kj3I}f|-I6H');
define('NONCE_KEY',       'gNKS5DOay:^A#o,m-Z`n$9Zq^oN)hA>Nl.|mF3tSu|}h7ezQ/;>igaLkK{_K[$C|');
/**#@-*/ 

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define ('WPLANG', 'fr_FR');

//@ini_set( 'log_errors', 'On' );
//@ini_set( 'display_errors', 'stdout' );
//@ini_set( 'error_log', '/var/www/wordpress/B.goutdubio.fr/log/error_php.log' );

/* Réglage de la mémoire */
define( 'WP_MEMORY_LIMIT', '96M' );

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu de WordPress vers le dossier WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');//Disable File Edits
define('DISALLOW_FILE_EDIT', true);

