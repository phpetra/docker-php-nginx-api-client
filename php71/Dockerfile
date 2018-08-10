FROM php:7.1-fpm

RUN usermod -u 501 www-data

# Setting up permissions so composer can run withput problems
RUN chown -R www-data /var/www
USER www-data

WORKDIR /var/www/html/
#CMD ["php-fpm7.0"]