FROM php:7.2-fpm-alpine3.7
RUN apk update && apk add build-base
RUN docker-php-ext-install mysqli pdo_mysql
RUN apk add zlib-dev git zip \
  && docker-php-ext-install zip
