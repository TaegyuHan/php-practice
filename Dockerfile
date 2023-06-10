FROM php:7.4-apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
COPY src/index.php /var/www/html/index.php