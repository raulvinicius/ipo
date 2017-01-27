<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ipo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^,%:kCCW&~n[awS/-b^6k1Ldw:b+;BYF+KW dJy#kwk_yO>5YK|S/R6C44k<T3*s');
define('SECURE_AUTH_KEY',  'DsU9E6B]l.DCo4y?sRUAimX[wID?{^F4:?U&3z-L6vdtin5?yr7BWG4UPx[0!ZE`');
define('LOGGED_IN_KEY',    'lwWAh;t-.i8|1W(D&^*gm5<7XI!VQgiV;a0tz.`B8P]3LM%?tXkfx;skO1(q_0Az');
define('NONCE_KEY',        '3Il*8COP8IqJ$_3^;3U|,;1!wi4,}>[X%vHEF; }R&RR8!}*wSgB>]Tx<p#%4]Md');
define('AUTH_SALT',        'qajEFIyp!z93mC.Q6P[!j-h0#JCN,Mp&[dGJ{9s).nZGRh<q*zwD&:-OGWb`J4Dm');
define('SECURE_AUTH_SALT', 'f5$Y=ahA1Bi:o*5zRpdksB8$$Y(<Bv-QQ;XR8Bm-QiXML`LE5n_?O|UK;%[2d^]=');
define('LOGGED_IN_SALT',   '6-+Xb)HJr3;a:L.x.|_]=@OO.%oG(#w-LM*%G(yI}DSW~Ywy~Lagjh7Ka8*t$-S`');
define('NONCE_SALT',       ';[/U@B|a.w8.GgM@>!+^llu}GYqnP=rNsZYAKcs*`SRsrx_nPB&e&!mwBDr8:w/F');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
