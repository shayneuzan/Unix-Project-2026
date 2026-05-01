FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY ./app/public /var/www/html
COPY ./app/includes /var/www/includes

WORKDIR /var/www/html
