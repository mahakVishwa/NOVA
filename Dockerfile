FROM php:8.2-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN docker-php-ext-install mysqli

EXPOSE 80
