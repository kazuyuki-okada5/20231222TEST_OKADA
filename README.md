# 20231222TEST_OKADA
# お問い合わせフォーム
# 　環境構築
# 　　1.git.clone リンク
#  2.docker-compose up -dーbuild
#
# ※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdpcker-compose.ymlファイルを編集して下さい。
# 
# Lalavel環境構築
# 　1.docker-compose exec php bash
# 　2.composer install
# 　3..env.exampleファイルから.envを作成し、環境変数を変更
# 　4.php artisan key:generate
# 　5.php.artisan migrate
# 　6.php artisan db:seed
# 
# 使用技術
#　 1.PHP  php:7.4.9-fpm
#   build:./docker/php
#   volumes:./src:/var/www/
# 　2.Laravel Framework 8.83.27
# 　3.MySQL 8.0.26
#   ROOT_PASSWORD:root
#   DATABASE:laravel_db
#   USER:laravel_user
#   PASSWORD:	laravel_pass
# 4.nginx:1.21.1
#   ports:80:80
#   listen 80
# 5.phpMyAdmin
#   image:phpmyadmin/phpmyadmin
#   depends_on:mysql
#   ports:8080:80
# 
# URL
# 1.環境開発: http://Localhost/
# 2.phpMyAdmin：http://localhost:8080/