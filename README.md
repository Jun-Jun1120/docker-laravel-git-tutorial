# 事前準備
1. 下記コマンドを実行
```bash
# backendフォルダを作成して移動
mkdir docker-laravel-git-tutorial && cd docker-laravel-git-tutorial
 
# git clone する
git clone https://github.com/Jun-Jun1120/docker-laravel-git-tutorial.git
```


# 1. ビルド・コンテナ起動

1. docker-compose.ymlがある階層で以下を実行

```bash 
# build
docker-compose up -d --build

# コンテナに入る
docker-compose exec app bash

# 以下のコマンドを実行
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
chmod -R 777 storage bootstrap/cache


2. ブラウザで[localhost:8080](http://localhost:8080/)を表示されるのを確認する


# 2. 参考サイト 
[【超入門】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)


