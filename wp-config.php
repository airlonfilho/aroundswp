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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ',^~~|#p)y^wrW;zc{-LO!y:&M`h^hftwriC1@Aqz~nn|m0%YvJI4iq^9#Sz]TEIZ' );
define( 'SECURE_AUTH_KEY',  '[bxHe$X}yx-td{cw{/%*=@zGHweI4ca5PmR=M/i[Nl(~35hh7MZ.on)RBhg.47*m' );
define( 'LOGGED_IN_KEY',    'Hrb^^N=T-Dw:P:&x8`UUz)Y:$*3!fp$Dd89vx[lFn= {47hA@6si)bd4=s7L:z9V' );
define( 'NONCE_KEY',        'm0OTQtUAFTu@vzHRXhKOixtt$?eugg2YVcIi.tfnq,b0iHioa3T_o[S|Fb3Utc$a' );
define( 'AUTH_SALT',        '5k~!IZO71td:*#ML59W>Zm4C1a-+b`*TV7yoYR(EzTaSD9&@@D;/6rhR!33WA![p' );
define( 'SECURE_AUTH_SALT', 'I0Pxxz&R#<?+~2S[4,%,m~A7=6<^.1%U)hR%!ke(l]az[)~r*:/[j<IERzWH[KE}' );
define( 'LOGGED_IN_SALT',   'Y1QSz7?Ve=n=OJh3R2mR@G7MYGCa?#EK3~W&|lLtk/v4hGYLMO(^EvRX7 >&fa|$' );
define( 'NONCE_SALT',       ' 8Pd2I41X_Ea9}4Ccx=}6g/F ;_(pUbfmi3IF3{`Go`fp5`8)A~U .Qkp]r-csA;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

define( 'FS_METHOD', 'direct' );