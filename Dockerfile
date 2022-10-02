FROM php:8.0.24-apache

RUN apt update \
&& apt install -y apt-utils vim curl sqlite3 \
&& pecl install xdebug

# copy test db file
ADD ./db/employee.db /employee.db

# The base image does not have php.ini. 
# Copy our own, with xdebug settings
ADD ./php.ini /usr/local/etc/php/

EXPOSE 80
