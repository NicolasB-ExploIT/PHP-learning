FROM php:8.3.4-fpm

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update \
    && apt-get install -y wget libicu-dev git-all zip unzip libzip-dev p7zip-full

RUN docker-php-ext-configure intl \ 
    && docker-php-ext-install intl mysqli pdo pdo_mysql zip \ 
    && docker-php-ext-enable pdo_mysql intl

WORKDIR /var/www/html 