FROM php:8.3-cli-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1

# System deps + build deps, then PHP extensions
RUN apk add --no-cache \
        sqlite sqlite-dev \
        linux-headers \
        $PHPIZE_DEPS \
    && docker-php-ext-install -j"$(nproc)" \
        pdo pdo_sqlite bcmath sockets \
    && apk del $PHPIZE_DEPS linux-headers \
    && apk add --no-cache netcat-openbsd

# Composer (pin major version)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install PHP dependencies
COPY composer.json composer.lock ./
RUN composer install --no-interaction --optimize-autoloader --no-scripts

# Copy application code
COPY . .

# Copy and set up entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Ensure sqlite file exists
RUN mkdir -p database && touch database/database.sqlite

# Keep container running; run consumer via:
# docker compose exec indexer-service php artisan rabbitmq:consume-articles
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["sleep", "infinity"]
