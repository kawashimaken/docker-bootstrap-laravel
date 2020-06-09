# How to start

```
git clone ~
cd docker-bootstrap-laravel
cd docker
docker-compose build
```

バックグランド実行
```docker-compose up -d```
or

```docker-compose up```

## PHPコンテナでの準備

```bash
docker-compose exec php bash

npm install --no-optional
composer install
php artisan migrate:fresh
php artisan migrate --seed
php artisan passport:install
php artisan config:clear
php artisan optimize:clear
```


# フォルダ説明

* docker：docker-compose 用の各種Dockerfile、設定です。

* project：Laravelプロジェクトのフォルダ


# ブラウザーで開く

http://localhost



# PHP（laravelコンテナに入る）

```
docker-compose exec php bash
```

# php artisan コマンドの使い方

上のコマンドを実行して、phpのコンテナに入ってから

## ルートの一覧
```php artisan route:list```

## データベースにテーブルの作成

blogsというテーブルの場合、前に、[create_]　をつけて、後ろに [_table]をつける

```php artisan make:migration create_blogs_table```

## マイクレーション

```php artisan migrate```

## モデルの作成

```php artisan make:model Blog```


# JavaScriptが更新した場合

```
docker-compose exec php bash
npm run dev
```

ブラウザーのキャッシュをリセットしてリロードする


