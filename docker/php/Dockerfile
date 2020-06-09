FROM php:7.2-fpm

RUN apt-get update \
    && apt-get install -y zlib1g-dev default-mysql-client libpng-dev libjpeg-dev gnupg curl wget unzip \
    && apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev  \
    && docker-php-ext-configure gd --with-png-dir=/usr/include --with-jpeg-dir=/usr/include \
    && docker-php-ext-install zip pdo_mysql gd

# phpredis install
RUN pecl install redis && \
    docker-php-ext-enable redis
RUN pecl install mongodb && \
    docker-php-ext-enable mongodb

# nodejs install
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash -
RUN apt-get install -y nodejs

# composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '$(wget -q -O - https://composer.github.io/installer.sig)') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/html

# laravel install
RUN composer global require "laravel/installer"