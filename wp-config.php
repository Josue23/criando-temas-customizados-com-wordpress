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
define('DB_NAME', 'wp_curso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         '9u54eOI/Pve)]:Q<}9noeG)fXR*]+RQ4?%D?U5_[>uVKH!FcC?Tl[5^L!!x2%tya');
define('SECURE_AUTH_KEY',  'y4NC]h&z}S-[1cic*H/~QSQy|KCR0$TaS9u:2Wh)9|A<WY6j^KminGs=+{_=iH9/');
define('LOGGED_IN_KEY',    'QXWKRwn3J7TD)c}&3x=)&^}%l3??MFmqq3dW!%Nxn|DbP_P@BHO|!/w69JB(]Mj9');
define('NONCE_KEY',        'Q>dZKVC[r1aWD0o;LrZ>p P|aXU-E`,*9QD5 kn?arzj_`+=eLo)AUHO^`^ne)og');
define('AUTH_SALT',        '(s.PF#^ZlR{JL5r4>?WSte%w[XYX 2,KdQm0sy2BGX:p@) ;eu:e?P>LaJN(v2lt');
define('SECURE_AUTH_SALT', 'i!0?ul0&P##qFKKX33NcUu&>bZhPe4*]vbOjUX)!_F5J!(3*AZ2yFRVK#2m%;ArN');
define('LOGGED_IN_SALT',   'yl>,)08MQP1GovkrQJ%2>!2*W0>z.UwT{@F*4H:Jjv(SvR!TJK9maI4J})d,*$42');
define('NONCE_SALT',       'Pt_1O#568;?AaDZ^&d6Lfh|$@aTcy/r1o2:?&fyCL0g1U+wwSql/[vx547T&F[:o');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpcrs_';

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
