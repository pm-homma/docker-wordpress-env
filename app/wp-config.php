<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wordpress' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'db:3306' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qe|*42 `.hFQ.8cn.FBQf+P-WPKx(!/;7$pHV@Gz:[83V,Fg8n&gsD]7{QL[|Bs`');
define('SECURE_AUTH_KEY',  '+b>LjdPi%%9mNNqy|<;d7BDcT0,h;kyx,TOLnS}DCEJeqZo_`g49hIit,oDRc4c)');
define('LOGGED_IN_KEY',    'b+yY_:BH9e`D~O6t{m~+F-;,=HE@]R49^-f-XV/wci|=tXeA>:m6<>Q;l`-*ssZ=');
define('NONCE_KEY',        '|A:ILc=,?aMnvs+KVDm<*lGjVSKL_0%+ --t~=(HIl&>*gZ_d4L*mmrp>&k:4W~C');
define('AUTH_SALT',        '&jfO1$=U vB7MCI-{3z9&64Y|v$|^3Un8F;]K:YU#<ShEM{R!DQ|=z0G{t+X+?*p');
define('SECURE_AUTH_SALT', '`UGc PdIBd>JucNLpZ}1|uO4QR:bD/1:ZD9}v`E~sFX/s0fvKL7l`DoK>z&w#CN?');
define('LOGGED_IN_SALT',   '{[-+=_&z(EE|S753vMR;i+9/;KPNd`Zp3h=LF;0,&m|4tq/9~1OdlccADFqjC)z,');
define('NONCE_SALT',       'gsYwyvq+,PDFr,)@5ja[ZpWlG++iJ1#%tne(37x$K6Soi|]]=0Tr tK|6P?LMG#)');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
