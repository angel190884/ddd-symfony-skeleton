# ./docker/php/Dockerfile
FROM php:7.4-fpm-alpine

ARG APCU_VERSION=5.1.20

RUN apk update \
    && apk add  --no-cache \
    git \
    curl \
    icu-dev \
    libxml2-dev \
    libzip-dev \
    g++ \
    make \
    autoconf \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-source delete \
    && docker-php-ext-install pdo_mysql soap intl zip opcache\
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /tmp/*

RUN pecl install apcu-"${APCU_VERSION}" && docker-php-ext-enable apcu
RUN echo "extension=apcu.so" > /usr/local/etc/php/php.ini
RUN echo "apc.enable_cli=1" > /usr/local/etc/php/php.ini
RUN echo "apc.enable=1" > /usr/local/etc/php/php.ini

WORKDIR /usr/src/app

COPY . /usr/src/app

