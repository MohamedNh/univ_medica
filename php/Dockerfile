FROM php:8.1-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN a2enmod rewrite

RUN apt-get update \
    && apt-get install -y libzip-dev  libonig-dev libxml2-dev  libfreetype6-dev libjpeg62-turbo-dev libpng-dev libapache2-mod-fcgid git wget --no-install-recommends \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install pdo mysqli mbstring soap pdo_mysql zip gd && \
    pecl install apcu && \
    docker-php-ext-enable apcu

RUN wget https://getcomposer.org/download/2.0.9/composer.phar \
    && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer

# Enable PHP-FPM
RUN a2enmod proxy_fcgi setenvif && \
    service apache2 restart

COPY apache/apache.conf /etc/apache2/sites-enabled/000-default.conf 
COPY . /var/www

RUN git config --global user.email "mohamed.nhari922@gmail.com" \
    &&  git config --global user.name "MohamedNh"

WORKDIR /var/www

CMD ["apache2-foreground"]