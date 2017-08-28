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
define('DB_NAME', 'mon_site_essai');

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
define('AUTH_KEY',         'MZyUXD:sH,D=p+izmK->>)De?33zvCn%KE$a2C5!M&l:Y=r ?Pw9sOgwL.EU8pP,');
define('SECURE_AUTH_KEY',  '}%@BCLmG40c<iu{kj9jO/UuP:cVu_JvKq)` d+zjOcz`[.@4~SJ_2q3X0aq16XfK');
define('LOGGED_IN_KEY',    '$+t/7IhAnkWhrvw?PPg3>.O_M*h?2dDz#4M15N!.J9}$+!<dGrCb*My#+(=kJFmQ');
define('NONCE_KEY',        ':x?3 %ia9=*&E$pIz(b9rY}$%9r:Y r8dTKNc[6W9&DCYW4dyx{y:Z,`[lw0~1VL');
define('AUTH_SALT',        'U}G,x**3nUlHACjyMq,i~DLL6Ab]A~vGia3Xb<6PgNv}B62d+4X-&rdu@Fc}e:{2');
define('SECURE_AUTH_SALT', ';3RQ{Nv_/z?3V=&raH~3D#V[zr73pFZJDJ:#*-&r_<.vS-ULK6iR}B@^G~Xoq,mr');
define('LOGGED_IN_SALT',   '@[p@sIslRJ,39(sKyRe@N+X9)_B.Z3+GC%M-.-Vj:`=&~d:bJAX~3c@ylR#km}Vk');
define('NONCE_SALT',       '7B%oDPF8H<H~|>X2K5S}zaR>QIj#.I(agUcBr?|4g6nZ!JMVkv~9nP@]=Id|$A19');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ms_';

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