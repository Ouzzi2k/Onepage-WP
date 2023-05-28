<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'OnePage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/_M2ByIP}<]B|?_]v-Y(D ,l$z]~drvLL`QR+(xt=wQUW 0Nps|pulm*s1$HF:sP' );
define( 'SECURE_AUTH_KEY',  'h^|J[&khK`VAu cMBl ClZEp:an~OT@v{Ak,=O1,kcv*6VxH3|WTJK2dIlJDHMf0' );
define( 'LOGGED_IN_KEY',    'moaP4&kaW7@OHFR*=sf_of m5PwH0VqNV#ehA?QdW)#GOH~MDR[jZWo|vyS9 [v*' );
define( 'NONCE_KEY',        'l30)x4+U<-}:1](^4EY<w<7a0^iIL%gIw$uy_{zE@U4quV5iLFiWws;7H|g!%BX#' );
define( 'AUTH_SALT',        '|!oRcYG]C9ixgHQ.%?H<ThE6H1rrrDM0u]GJ@+FMD%/oC<.q8g@PZWPP rBE2:-x' );
define( 'SECURE_AUTH_SALT', '.8pOS#t+`=yV~C1zQxQ<+ZXR1J5nzJX SUd/!q?L85jEp:~sz{PBd58>=UfeA[sr' );
define( 'LOGGED_IN_SALT',   'Qe=XlGsX{Uv}aKz[D`<a!{#Gg0:bgYlAp%<}SIjJ!#f&Tljj/uGvKKJeA8-,RL*I' );
define( 'NONCE_SALT',       '9Y>w^@;DF<oy2>n8Rfv<>L/Mw>*ON2+3i5tl[9xf-YC9([30mN*xUWbHZ$rK5Bou' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
