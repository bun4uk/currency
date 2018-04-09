FROM php:7.2.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    libxml2-dev

#PHP modules install
RUN docker-php-ext-install pdo_mysql && \
    docker-php-ext-install soap

RUN docker-php-ext-install opcache

RUN apt-get install -y libxslt-dev
RUN docker-php-ext-install xsl

RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl


#Composer install
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN echo "memory_limit=1024M" > /usr/local/etc/php/conf.d/memory_limit.ini
RUN echo "date.timezone=UTC" > /usr/local/etc/php/conf.d/date_timezone.ini