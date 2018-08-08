# laravel-on-docker
laravelをdockerで


# 環境構築手順
- $git submodule update -i
- setting/init.shを実行してlaradockの設定を変更する

- $cp -p src/.env.example src/.env

# コンテナ立ち上げ
- $docker-compose up -d nginx mysql phpmyadmin


# in workspaceでの設定
- $docker-compose exec workspace bash
### in workspace
- $composer install
- $php artisan key:generate
- $php artisan migrate
- $php artisan db:seed


# メールの送受信テスト
mailtrapを使う https://mailtrap.io  
src/.envで以下の設定をmailtrapで取得したアカウントと合わせる  
- MAIL_DRIVER=smtp
- MAIL_HOST=smtp.mailtrap.io
- MAIL_PORT=2525
- MAIL_USERNAME=***********
- MAIL_PASSWORD=***********

# nodejs
laradock/.env
- WORKSPACE_INSTALL_NODE=true

# Vue.js
コンパイルはローカルで行う
- $cd src
- $npm install
- $npm run watch（これでコンパイル＋監視）


# mysqlのinitializeがおかしいときは
- 作業しまくって以下のデータが壊れているかもなので消しておく
rm -Rf ~/.laradock/data
