#!/bin/bash

cd /var/www/html

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
php wp-cli.phar --info
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

wp core download --allow-root

echo "Creating config.."

sleep 2

wp config create --allow-root --dbname=$MARIADB_NAME \
  --dbuser=$MARIADB_USER \
  --dbpass=$MARIADB_PWD \
  --dbhost=$MARIADB_HOST \
  --dbprefix=wp_ \
  --dbcharset=utf8 \
  --dbcollate=utf8_general_ci \
  --locale=en_US


wp core install --allow-root \
  --url=127.0.0.1\
  --title=$WP_TITLE \
  --admin_user=WP_ADMIN_USR \
  --admin_password=WP_ADMIN_PWD \
  --admin_email=$WP_ADMIN_EMAIL


mkdir /run/php
sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf
echo "Wordpress installed and configured."


wp user create $WP_USR $WP_EMAIL --user_pass=$WP_PWD --role=author --allow-root

wp theme install astra --activate --allow-root
wp plugin update --all --allow-root

/usr/sbin/php-fpm7.3 -F
