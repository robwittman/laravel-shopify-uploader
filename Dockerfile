FROM php:7.2-apache

RUN apt-get update \
    && apt-get install -y \
        libpq-dev

RUN docker-php-ext-install pdo pdo_mysql
RUN mkdir /etc/ssl/apache2

RUN a2enmod rewrite
RUN a2enmod ssl

RUN service apache2 restart

EXPOSE 443
