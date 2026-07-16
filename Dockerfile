FROM php:8.2-fpm-alpine

# Tizim paketlari va PostgreSQL drayverini o'rnatish
RUN apk add --no-cache nodejs npm git unzip libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Composer'ni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Paketlarni yig'ish
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs \
    && npm install && npm run build

# Port va ishga tushirish buyrug'i
EXPOSE 80
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-80}
