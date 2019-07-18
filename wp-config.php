<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'plugins' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}BK 9ltA81o Dv6f[v93pfp+>7+`^9jk}}R5`9/>XACZ$W},J1M$.M1b/&cJ,vnV' );
define( 'SECURE_AUTH_KEY',  ':3y)?@3DMCr,r<-tjH-Q^u$*NWB:^2=upA 5TE2G|K!MDqnl~w]:U{K&ze8#j<sr' );
define( 'LOGGED_IN_KEY',    'GhyO?8*H9lImFoy12v7%d}Ly~>>}`!n]No{S2E/*D.$]}u=?gPf~1Gz-9!@U,0v`' );
define( 'NONCE_KEY',        'm3xv+n&MAxfjV_1G*=Te>]XnS9xmLe^qP0gJJ*]I,)ozZ.u=TKg:Wqv@ pX;5NGZ' );
define( 'AUTH_SALT',        'j)U{U+zO>[}H`Q^tI#*{$*nCU4@/A;hd3)N)[zCF@|4?|wqU9!?&?^tq0t&T>O5=' );
define( 'SECURE_AUTH_SALT', '~u8v4UkQEUn*@c/+]ew&=;WsS^^@!$cW&;Mu~qFDU}Z16{>2#;Y> ok ?WJ3}E{;' );
define( 'LOGGED_IN_SALT',   'JQBgRC@Z3rYo7;1r]IR$sbDy1QmuE ft8Y|BWMa )Gl,Q]e^(acJBt/5Vv^8YD}-' );
define( 'NONCE_SALT',       ']jQ;|k/R}DwqiZbK(|&&q<oVVO!fUkZ1~y^O.BhpffJo>cNTK3}04- _2?.pt1I_' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
