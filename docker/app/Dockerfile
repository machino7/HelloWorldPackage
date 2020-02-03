FROM php:7.4-fpm

# Update repository & Install packages
RUN \
    apt update \
    && apt -y install \
        git \
        vim \
        libpq-dev \

    # clean repository
    && apt clean \
    && rm -rf /var/lib/ap/lists/* /tmp/* /var/tmp/*

# Install composer
WORKDIR /usr/bin

RUN curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

WORKDIR /workspace
