FROM bitnami/laravel:6.20.1

#Install xdebug

RUN pecl channel-update pecl.php.net
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
#
#WORKDIR /app
#
#EXPOSE 3000
