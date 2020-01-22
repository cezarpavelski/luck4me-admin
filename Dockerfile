FROM php:7.1.27-fpm

RUN apt-get update
RUN apt-get install -y apt-utils build-essential
RUN apt-get install -y nginx

RUN apt-get install -yq \
    libfreetype6-dev \
    libmcrypt-dev \
    libjpeg-dev \
    libicu-dev \
    libgettextpo-dev \
    libpng-dev \
    unzip \
    libxml2-dev

RUN docker-php-ext-install pdo_mysql \
    gd \
    mbstring \
    mysqli \
    mcrypt \
    zip \
    soap

COPY . /var/www/html/
RUN mv /var/www/html/nginx.conf /etc/nginx/sites-available/default
RUN rm -f /var/www/html/Dockerfile
RUN rm -f /var/www/html/docker-compose.yml

CMD nginx && php-fpm

WORKDIR /var/www/html
