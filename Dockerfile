FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install redis && docker-php-ext-enable redis

COPY ./app/ /var/www/html
COPY ./app/includes /var/www/html/includes

WORKDIR /var/www/html
