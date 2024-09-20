FROM php:8.3-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    zlib1g-dev \
    libpng-dev \
    libzip-dev

RUN docker-php-ext-install pdo pdo_mysql gd zip

#ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# copy only composer files because if they are not changed then docker cache is used also for composer install
COPY ./app/composer.* ./

RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

# copy all app source files
COPY ./app .

RUN composer dump-autoload --optimize
