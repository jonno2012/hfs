FROM php:8.3-cli-alpine

# Install required system dependencies
RUN apk add --no-cache sqlite

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copy application code
COPY . .

# Default command
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
