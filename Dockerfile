FROM php:7.3.8-apache
RUN apt update && apt upgrade -y
RUN docker-php-ext-install mysqli pdo pdo_mysql
EXPOSE 80