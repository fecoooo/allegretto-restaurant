FROM zerosuxx/php-dev:7.2.9-apache

ADD . /var/www/html/public

RUN 'rm -Rf /var/www/html/public/.git'