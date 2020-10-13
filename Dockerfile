FROM php7-fpm:latest
COPY . .
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]
