FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY ./app/ /var/www/html
COPY ./app/includes /var/www/html/includes

WORKDIR /var/www/html
