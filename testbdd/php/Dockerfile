FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli pdo_mysql pdo
RUN curl -sS https://get.symfony.com/cli/installer | bash 
RUN /Users/$USER/.symfony/bin/symfony
RUN symfony server:ca:install
RUN symfony serve -d 
EXPOSE 80

