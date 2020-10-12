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
// /** WordPress のためのデータベース名 */
// define( 'DB_NAME', 'bisquelizard14_portfolio' );

// /** MySQL データベースのユーザー名 */
// define( 'DB_USER', 'bisquelizard14' );

// /** MySQL データベースのパスワード */
// define( 'DB_PASSWORD', 'sora1220' );

// /** MySQL のホスト名 */
// define( 'DB_HOST', 'mysql1019.db.sakura.ne.jp' );

// /** データベースのテーブルを作成する際のデータベースの文字セット */
// define( 'DB_CHARSET', 'utf8' );

// /** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
// define( 'DB_COLLATE', '' );

/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'sora1220' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '?^}i^7<Ko$Ajpw}p3QJ3ucl*,-V?g%]L0=<|cs| ti/)x,PON<UO2Od3Ct;d&Dm7' );
define( 'SECURE_AUTH_KEY',  'JC<4/u1.ygw*:n+s)&RP-K];ZBN!(eIL_@mbllk0KEt<*(4<2jc@^QGGvcS{-h]0' );
define( 'LOGGED_IN_KEY',    'a-<tBul*yW=>Ya4m:!{Yk6t/7Z24E%Q]wuee7AlV<B@qHM}yxSz9c&5z8}MuojTv' );
define( 'NONCE_KEY',        ';v|qp){mTS$LpQt9%JGM-Xti2i.TH _S7~0Y?:wV`~i?z#G/M043*yFM>`D<V(sA' );
define( 'AUTH_SALT',        'nS4AdE=A5iFe $9q{xC2s$.}&[t2`ov0[0~Y,]U_[:qgG^cEi,A2kky!IYj#+vp9' );
define( 'SECURE_AUTH_SALT', 'L++2%po^9XL c8xXYm0-(c&}!:KNOjxJ:CdQEAN0iAon`=Nf~A+Lmk+LU;+Jw0B_' );
define( 'LOGGED_IN_SALT',   'f^556VeR{4wlrHx<.7[eVSpHGtnW+8j|?Cvx<2YM,6C,96wDyId7|$tDL|?[C&la' );
define( 'NONCE_SALT',       'ZGpvp*1$b0I[*;+B,^w9QP5nD*J`k-wCW~]x6mazyi&),KXVKwY2k|K;6`HS*?81' );

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
