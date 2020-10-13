FROM php:7.2.2-apache
COPY . .
RUN apt-get update
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]
