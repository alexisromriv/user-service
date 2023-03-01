FROM php:7.2-apache

COPY src/ /var/www/html/

RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install zip  && a2enmod rewrite && docker-php-ext-install sockets

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

COPY src/composer.json src/composer.lock ./

RUN composer install --no-plugins --no-scripts --optimize-autoloader --ignore-platform-req IGNORE-PLATFORM-REQ --prefer-dist

RUN composer dump-autoload