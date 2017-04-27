FROM php:7.1.1-fpm-alpine

RUN apk update && \
    apk add --no-cache git mysql-client curl libmcrypt libmcrypt-dev openssh-client \
    libxml2-dev freetype-dev libpng-dev libjpeg-turbo-dev g++ make autoconf nodejs python && \
    rm -rf /tmp/src && \
    rm -rf /var/cache/apk/*

RUN docker-php-ext-install \
    pdo_mysql \
    mysqli \
    mbstring

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

RUN npm i -g gulp && \
    rm -rf /tmp/*

ENV LARAVEL_ROOT /laravel
RUN mkdir -p $LARAVEL_ROOT
WORKDIR $LARAVEL_ROOT

COPY . .

RUN chmod -R 777 storage  bootstrap/cache