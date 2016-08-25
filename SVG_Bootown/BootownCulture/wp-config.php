<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\WordPress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'db633782116');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo633782116');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'bootownculture');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'db633782116.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QcJU,/C4GM|r%x+(*H] ywmKts0H;%~Q>N,RqnyOY6DG5Rx)V_MJfRsvzfj%NC<Q');
define('SECURE_AUTH_KEY',  '/Gcf_`aV~DZ|}w8Rv^mV<7>pL#+eJ7nV_R6?xv3Zsi?kqWToDRL!B}d#spB)H-@Q');
define('LOGGED_IN_KEY',    'ixN>0MqQ3Q UP0buc9%In[fW/0MNwfY155Zwa%AepCScLDrCAA=#rRO4XPJ>i4,9');
define('NONCE_KEY',        'V9nrL2pAJ? ;+]l^;0E? _H=dmpdx1oDo-m|-dT!;N|Bbf[prC&kzVGA2#k>Jrqr');
define('AUTH_SALT',        '{T:PNDiI-HV]vF!j4PpZ1nD@riV25whtJ__1yCZI>|k!x7EtwFqkM&+<ZdSs3e3n');
define('SECURE_AUTH_SALT', '3-aC.d&uEA)GY?-?eTHWQy(,5.|dTO*k?j%!g.pAclbQ5V-IdbFKbu<aFZ2yPVx!');
define('LOGGED_IN_SALT',   'ZIJc1bo4k>dI|L&Ta]GicK2z%+m_kD&/ok<27tjm.$;URy1*$__m 1s8Y1X>_k=V');
define('NONCE_SALT',       ';h_x1waKdBi37PFxE bNNtV`$LQ91VmSi_~7+4lw.!$*^5cTA>oq`[?z)#`6ig`B');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');