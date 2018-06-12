FROM ubuntu:16.04

RUN apt-get -y update
RUN apt-get -y upgrade

RUN apt-get install -y git
RUN apt-get install -y zip
RUN apt-get install -y apache2
RUN apt-get install -y php
RUN apt-get install -y libapache2-mod-php
RUN apt-get install -y php-mcrypt
RUN apt-get install -y php-mysql
RUN apt-get install -y php-mbstring
RUN apt-get install -y php-dom
RUN apt-get install -y composer
RUN apt-get clean

ADD ./docker/apache2/local.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

WORKDIR /var/www

EXPOSE 80
CMD apachectl -D FOREGROUND