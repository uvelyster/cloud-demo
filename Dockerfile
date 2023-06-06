FROM php:7.3-apache
COPY *.php /var/www/html/
RUN docker-php-ext-install mysqli
