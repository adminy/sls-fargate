FROM php:8.3.2-cli-alpine3.18
RUN docker-php-ext-install pcntl
COPY service.php /app/service.php
ENTRYPOINT ["php"]
CMD ["/app/service.php"]
