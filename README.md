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
名前付きルートでリンクを設定しておくことで、URLを変更した場合でもコードを書き換える必要がなくなる
-
-
## hasfactory
HasFactoryはテスト用のデータ（ダミーデータ）を大量に作成するためのメソッドを提供するトレイト
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
