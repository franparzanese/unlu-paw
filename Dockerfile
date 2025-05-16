FROM php:8.4-apache

# Descarga Composer.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala extensiones requeridas por Phinx.
RUN docker-php-ext-install pdo pdo_mysql && apt-get update && apt-get install -y git unzip

WORKDIR /app
