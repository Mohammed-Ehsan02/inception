#!/usr/bin/env bash

cd $WP_ROUTE

wp core download --force --allow-root

wp config create --path=$WP_ROUTE --allow-root --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=$DB_HOST --dbprefix=wp_

if ! wp core is-installed --allow-root --path=$WP_ROUTE; then
wp core install --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN_USER --admin_password=$WP_ADMIN_PASS --admin_email=$WP_ADMIN_EMAIL --allow-root
wp user create $WP_USER $WP_EMAIL --role=author --user_pass=$WP_PASS --allow-root
fi

php-fpm7.4 -F
