FROM ubuntu:18.04

# Install apache, PHP, and supplimentary programs
RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    apache2 php7.2 php7.2-mysql libapache2-mod-php7.2 curl lynx-common \
    php-xml php7.2-gd php-curl php7.2-mbstring python nano git mysql-client zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Enable apache mods.
RUN a2enmod php7.2
RUN a2enmod rewrite

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# ポート80番を開放
EXPOSE 80

# ローカルの設定ファイルをコンテナの設定ファイルと同期させる
ADD httpd.conf /etc/apache2/sites-enabled/000-default.conf

# apacheをforgroundで起動させる override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND