# laravel-on-docker
laravelをdockerで


# 環境構築手順
- $git submodule update -i
- $cp -p laradock/env-example laradock/.env
- laradock/.envを編集
```
APPLICATION=../src/
```
- $cp -p src/.env.example src/.env
- $docker-compose exec workspace bash
### in workspace
- $composer install
- $php artisan key:generate

# コンテナ立ち上げ
- $docker-compose up -d nginx mysql phpmyadmin
