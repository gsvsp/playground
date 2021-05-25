FROM php:8.0-apache 

RUN a2enmod rewrite
COPY apache-config/apache2.conf /etc/apache2/apache2.conf

ADD src /var/www/html