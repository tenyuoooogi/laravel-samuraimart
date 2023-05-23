## 4章
https://terakoya.sejuku.net/programs/92/chapters/1153#4.4-%E3%83%9E%E3%82%A4%E3%82%B0%E3%83%AC%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E7%B7%A8%E9%9B%86%E3%81%97%E3%82%88%E3%81%86
php artisan make:model Category -m
で作成したデータベースの中に、tinkerでテーブルを作成し、その中にデータを入力できる。そのあとにtinkerでセーブすることでデータを保存することができる。

- シーダーとはダミーのデータや必要になる基礎データなどをまとめて作成することができる仕組
シーダーを使えばまとめてカテゴリを入力するときなどに有効
- string関数
プログラミングを行う中で、文字列に対して色々な操作を行うための関数
- text関数
セルの数値を書式（表示形式）を設定して文字列として変換する関数

## 5章　　


- laravelにおけるビューの実装方法
Bladeと呼ばれるテンプレートエンジンが標準搭載されており、これを利用してビューを実装する。
- １．resources/viewsディレクトリ配下に●●●.blade.phpというファイル名でテンプレートファイルを作成する
- ２．ルーティングやコントローラから作成したテンプレートファイルを呼び出す
●●.blade.phpは基本的にHTMLと同じように記述できる
@ifや@foreachのようにアットマークをつけることでif文やforeach文を使うこともできる

## requestがわからなかったため記述
// 入力値を全部とりだす。
$input = $request->all();
 
// これも、入力値を全部とりだすが、all()と違ってファイル関連のデータはなし
$input = $request->input();
 
// これはヘルパー。input()と同じ
指定した入力値だけを取り出すときは、
$input = request();
/ 'name'の値を取り出す
$name = $request->get('name');
 
// これも、'name'の値を取り出す
$name = $request->input('name');
 
// これも、'name'の値を取り出す
$name = $request->name;
 
// これはヘルパー
$name = request('name');

## 6章
### asset関数

- ディレクトリ配下のファイルにアクセスできる



## 7章　ログイン

- （）で囲むことで、日本語や英語などの言語設定にたいおうしたメッセージにすることができる
- パスワードを再発行するメールには、トークンを含んだURLにする必要があるため、$tokenを利用

8章
## bootstrap
mb-5のように、mの後にt（top）, l（left）, r（right）, b（bottom）のそれぞれを追加することで、上下左右の指定の向きにマージンを付けられます。

{{ asset('img/dummy.png')}}はpublicディレクトリ内にある画像やCSSなどを読み取ったり、表示するための関数

## 9章
asset関数を使うことで、publicディレクトリ配下の画像ファイルなどにアクセスできる
### 躓いたところ
ブラウザにコードを入力したヘッダーの部分が反映されず、どこのコードが間違っているかを模索していたが、ヘッダーのファイルを保存していないのが原因だった。
## 今回の失敗を踏まえて
エラーを探す前に、まず教材を見返す、そしてその次に今やったファイルを保存し、ブラウザももう一度リロードしてみる。

## 10章　レビュー機能の追加
今回レビューを行う際にユーザーのIDも保存しています。そこでビュー側でログイン済みかどうかを判定できる@authを使っている
## 11章レビュー機能を追加しよう
### わかったこと
商品に関しての全てのレビューが$reviewsに保存されており、@foreachを使うことで全てのレビューを表示できる。
### 躓いたところ
作成途中でスペルミスからエラーが出た。
### 失敗を踏まえて
そのエラーが出た直前をもう一度確認することでエラー解決ができた。エラーが出たときは落ち着いて、直前のコードに何らかの問題があるということを頭に入れておく。
## 12章
ライブラリでお気に入り機能を導入したが、公式サイトでライブラリを見ていなかったため、18章で急にわからないコード分が出てきてこんわくしてしまった。
### 失敗を踏まえて
新しく機能を導入したりする場合、公式サイトに目を通してみる。
## 14章
カテゴリの絞り込み機能を追加しよう
 $major_category_names = Category::pluck('major_category_name')->unique();
 全カテゴリーのデータからmajor_category_nameのカラムのみを取得します。その上でunique()を使い、重複している部分を削除している。
 上の文の重複というのは同じカテゴリやメジャーカテゴリのこと
### 理解したこと
ビューを修正する際、foreach文で繰り返し処理を行い、すべてのメジャカテゴリとカテゴリを出力している。
カテゴリを絞り込む際、カテゴリの値を受け取ったとき（if ($request->category !== null)）に、カテゴリのIDを自動入力して、出力している
## 16章
[リンク](https://terakoya.sejuku.net/programs/92/chapters/1165#16.1-User%E3%83%A2%E3%83%87%E3%83%AB%E3%81%AB%E3%82%AB%E3%83%A9%E3%83%A0%E3%82%92%E8%BF%BD%E5%8A%A0%E3%81%97%E3%82%88%E3%81%86)
default
## 18章お気に入り商品を表示する
###　理解したこと
- ルーティングで同じコントローラ内ならグルーピングができる
- お気に入りにもIDがあり、foreach文で繰り返し処理をすることで、お気に入りだけを表示できる。




教材を始める際にその公式を見る
laravelの公式ページのドキュメントを確認する
tinker
ターミナル上でphp artisan tinker
と入力するとブラウザを開かなくてもターミナル上で確認ができるようになる。
例えば意味が分からなかったコードも例文を調べて、打ち込むことで、プログラム内で何が起きたのかを記してくれるためとても便利。
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
テーブルを貸した場合
laravelの公式ページのドキュメントでmigrationを検索すれば出てくる

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
