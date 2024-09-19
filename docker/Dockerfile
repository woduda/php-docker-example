FROM php:8.3.11-fpm

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libpng-dev 

RUN docker-php-ext-install pdo pdo_mysql gd

WORKDIR /var/www
