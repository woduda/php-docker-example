FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libpng-dev 

RUN docker-php-ext-install pdo pdo_mysql gd

COPY ./composer.* ./
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

COPY ./src .

RUN composer dump-autoload --optimize

WORKDIR /var/www
