FROM php:8.0-apache

LABEL maintainer="Andres Ceballos Rivera <andres.ceballos@gmail.com>" \
    Description="Container PHP 8.0 witch Apache."

WORKDIR /var/www/html

#Install PHP Extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql