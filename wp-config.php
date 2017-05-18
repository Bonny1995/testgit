<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'my_projectva');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hRdnE`;wTla=La-TbvmGvIcgF]_DXQ*I>,-8E=!}^KC[TK6gfQ_eX#:Tv1~-3c<{');
define('SECURE_AUTH_KEY',  ':#,qJgJYHB+j+;xyEO74NP*Gl9Q10bg}a|S#i9>V_.n#vr@~pey2IaOi]1Y=c;Q ');
define('LOGGED_IN_KEY',    'flc=PJyDYc#k6}{vpQblSQ>rCdaxUu6,W zdBNG&%.hqC5J_EJ7z)}I[^TQgjZTQ');
define('NONCE_KEY',        'K9+(n`qe$F9.tDWv_4JFy ?7Jlq]>]*&^{rz}b3;M%@p?,)>4x4tva@6l5m X^90');
define('AUTH_SALT',        'Xr#6o9ByuY79^EaD%HLWH(8Yv98&4sb?gabyI# ALR)S|tO<0JRSdEww<SB;-H)b');
define('SECURE_AUTH_SALT', 'qDpzEkq&y^wb m1vhUf:p2Jp>,xMEOY|IZ&yDZ[}R*@ABX+w:g#$fme3u]E;OLDQ');
define('LOGGED_IN_SALT',   'zz(W[FBN+:6F3AFIZ y:^B%HF,y1-!2p4.a9uXiF[RrXlqzC;pr+9%FVORSf$%#S');
define('NONCE_SALT',       '}6~_TkS5ZS?kgume;6ekn3iY1hk#B/]:CMVXf^:4x/-@n}[,B!/!_sfPJmg<u^>Y');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');