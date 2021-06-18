FROM php:7.1.23-apache
WORKDIR /
COPY . /var/www/html
RUN echo "ServerName localhost:80" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install pdo_mysql
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
EXPOSE 80