## category
- 今回は、複数ある商品を一つのカテゴリで参照する形になっているので、belongsToを使用しています。
- 1つのカテゴリーには複数の商品が紐づくので、hasManyを指定しています。
[rink](https://terakoya.sejuku.net/programs/92/chapters/1154)
## view
また、第二引数にはコントローラからビューに渡す変数を指定します。その際によく使われるのがcompact関数です。上記のようにcompact('products')と記述すると、変数$productsがビューに渡されます。

Node.jsを一言でいうと、サーバーサイドのJavaScript実行環境である
## npm
npmはNode.jsのパッケージ管理システムである
本教材ではLaravelにBootstrapを導入するときにnpmを利用する
##　投稿一覧
投稿一覧ページはCRUDのうち、Read（読み取り）に該当する機能です。PHPのforeach文を使い、投稿日時が新しい順に表示させます。
## 作成機能
データの作成機能はCRUDのうち、Create（作成）に該当する機能です。以下のように、「投稿」ボタンを押すと投稿データが追加され、そのあと投稿一覧ページにリダイレクトするようにします。
## 投稿詳細ページ
投稿詳細ページはCRUDのうち、Read（読み取り）に該当する機能です。投稿一覧ページの「詳細」ボタンを押すことで遷移するようにします。
## 投稿編集ページ
投稿編集ページでは、以下のような入力フォームを作成します。新規投稿ページとは異なり、編集前のデータを初期値に設定します。
## 更新機能
データの更新機能はCRUDのうち、Update（更新）に該当する機能です。以下のように、「更新」ボタンを押すと投稿データが更新され、そのあと投稿詳細ページにリダイレクトするようにします。
## 削除機能
データの削除機能はCRUDのうち、Delete（削除）に該当する機能です。以下のように、「削除」ボタンを押すと投稿データが削除されるようにします。

## namespace
電話帳にあらかじめ「東京都／侍太郎」「大阪府／侍太郎」と登録することで識別できるようにします。この「東京都」や「大阪府」の部分がnamespace（名前空間）です。
## use宣言
そのファイル内ではRequestと記述するだけでRequestクラスを呼び出せるようになります。
## ヘルパー
「助っ人」の意。Laravelにおいて好きな場所から呼び出せる便利な関数のこと。ヘルパー関数とも呼ばれる
- routeヘルパー
名前付きルートを呼び出すにはLaravelのroute()ヘルパーを使う
名前付きルートでリンクを設定しておくことで、URLを変更した場合でもコードを書き換える必要がなくなる。
-　OLDヘルパー
old()ヘルパーの引数にフォームのname属性の値を指定することで、そのフォームの直前の入力値を取得してくれます。
例　<input type="text" name="title" value="{{ old('title') }}">

## hasfactory
HasFactoryはテスト用のデータ（ダミーデータ）を大量に作成するためのメソッドを提供するトレイト
## インスタンス化
インスタンス化とは、オブジェクト指向のプログラミングにおいて、インスタンス（クラスを基にした実際の値としてのデータ）を生成することである。 通常、インスタンスはクラスと対比して使用される。 例えば「名前、身長、体重」というクラスがあるとすれば、そのインスタンスは「佐藤、170、60」というよう風にして作られる。
## セッション
withとsession
with()メソッドは以下のように第1引数にキー、第2引数に値を指定することで、セッションにそのデータを保存できます。
return redirect()->route('posts.index')->with('flash_message', '投稿が完了しました。');

複数のリクエストにわたって一時的にデータを保存する仕組みのこと。セッションを利用すれば、ページを移動してもデータを保持できる
## GET
「このページの情報をください」
ページの表示（index、create、show、editアクション）
## POST
「このデータを送るので受け取ってください」
データの作成（storeアクション）
## PUT/PATCH（PUT：全体的な更新　PATCH：部分的な更新）
「この新しいデータで置き換えてください」
データの更新（updateアクション）
## DELETE
「このデータを削除してください」
データの削除（destroyアクション）
## Route::resource('posts', PostController::class);
## action属性?
[samurai](https://terakoya.sejuku.net/programs/87/chapters/1048)
## ディレクティブ
Laravelのビュー内では@ifや@foreachのように@（アットマーク）をつけるだけで、簡単にPHPやLaravelの処理を実行することができる。
このように@（アットマーク）から始まるコードのことを、Laravelではディレクティブといい、ディレクティブは英語にするとdirectiveで、「命令」という意味
## compact?
compact()関数＝引数に渡された変数とその値から配列を作成し、戻り値として返す関数
https://inouelog.com/php-compact/
## route id
{post}の部分に入るidはどのように判定するのかというと、route()ヘルパーの第2引数にPostモデルのインスタンスを指定するだけです。
<a href="{{ route('posts.show', $post) }}">詳細</a>

## routeヘルパー
https://www.larajapan.com/2020/09/19/route%E3%83%98%E3%83%AB%E3%83%91%E3%83%BC/




### ターミナルコマンド
投稿の全データを取得するには、以下のようにモデルのall()メソッドを使う
$posts = Post::all();l



 postsテーブルの全データを新しい順で取得する
$posts = Post::latest()->get();
php -f 実行
php -r引数にコードを指定して実行？
https://terakoya.sejuku.net/programs/87/chapters/1051

## ＠yield
　@yieldを記述することでその箇所を個別のコードに置き換えてくれます。例えばtitle要素の中身はページごとに異なるので、以下のように@yieldを使います。
## migration
「マイグレーション＝データベースに接続してテーブルを作成したりカラムを変更したりすること」という認識でOKです。
## https://terakoya.sejuku.net/programs/88/chapters/1060
hasmany belongsTo
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
