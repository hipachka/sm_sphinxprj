FROM devilbox/php-fpm-8.1:latest

# composer
RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer

RUN usermod -u 1000 www-data

WORKDIR "/var/www"
