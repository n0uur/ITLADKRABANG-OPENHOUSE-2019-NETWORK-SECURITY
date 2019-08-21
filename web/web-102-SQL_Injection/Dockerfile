FROM php:7.2-apache

COPY src/ /var/www/html
RUN chmod 755 -R /var/www/html
RUN chown www-data:www-data -R /var/www/html
WORKDIR /var/www/html/

EXPOSE 80
