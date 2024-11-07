FROM php:8.0-apache

LABEL maintainer="Andres Ceballos Rivera <cr.andresf@gmail.com>" \
    Description="Container PHP 8.0 witch Apache."

RUN a2enmod rewrite

WORKDIR /var/www/html

#Update packages
RUN apt-get update

#Install PHP Extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql