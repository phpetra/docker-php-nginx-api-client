FROM php:7.0-fpm

RUN usermod -u 501 www-data

# Setting up permissions so composer can run withput problems
RUN chown -R www-data /var/www
USER www-data

#Niet de poort exposen! EXPOSE 9000
WORKDIR /var/www/html/