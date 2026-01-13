FROM php:8.4-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite
RUN a2enmod rewrite

# Change Apache DocumentRoot to /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
 && sed -i 's|/var/www/|/var/www/html/public|g' /etc/apache2/apache2.conf

WORKDIR /var/www/html

# Copy app files
COPY . .

# Copy Composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install composer dependencies
RUN composer install --optimize-autoloader --no-dev

# Generate APP_KEY & cache configs/routes automatically
RUN php artisan key:generate --no-interaction \
    && php artisan config:cache \
    && php artisan route:cache

# Set proper permissions
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
