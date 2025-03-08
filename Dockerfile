FROM php:8.3-apache

RUN docker-php-ext-install mysqli \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql

EXPOSE 7080
