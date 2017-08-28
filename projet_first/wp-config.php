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
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projet_first');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'pLeYwJe_((70LXS=~=-R6pl>DlQ[tjr.qZ(4^.E#&5hg5gZ8Mk?4{TWEh4OryWX+');
define('SECURE_AUTH_KEY',  'NQw3U|mtb)tPB#E&S:HOv2,Vv?CQF*exg[n*p84N6 :+Yq@Z&)I-haoFik_KHNsR');
define('LOGGED_IN_KEY',    'jm!eV5zkh._dj{<(>G*O_Lh48TdQ6H|We]R9X?h&C,FsFPt,gLn&q5+!0v>n-NYI');
define('NONCE_KEY',        '<z=QHycx~#/L~f0zOivGKcwPpZl-Clfq,z8wq=*zsh+D8S+k]BHIrewPOhXSb0AX');
define('AUTH_SALT',        ',6xtAQGhzdb<Z% ,VEa2>[1!,LTM&fEseQOp}zdNad*2nhwK;;IRyMEJGpYjmrfm');
define('SECURE_AUTH_SALT', '5:YC~#-_kG^_5$pJFQ>yiGd&Z8|GSL+:7b.=q{+Y9#~1>T$R@Jd:!}.6xGyzLYxJ');
define('LOGGED_IN_SALT',   'LN3w^O!?W4,vG;#{icI]GUlOY[3MG,H=_0Ome!B&4dU-i/#snp9AgUsxPDTr`]kd');
define('NONCE_SALT',       'U4_vseY+)Do#>Ch@;9_GK>o[s!3?.2Q=Ar+v<~lnyKce!gabEpLI7 <c#qb4JxDB');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');