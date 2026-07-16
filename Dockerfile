FROM php:8.2-cli-alpine

# Tizim paketlari va PostgreSQL drayverini o'rnatish
RUN apk add --no-cache nodejs npm git unzip libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Composer'ni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Dependentliklarni o'rnatish
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs --no-scripts

# Port sozlamasi va eng oddiy ishga tushirish buyrug'i
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
