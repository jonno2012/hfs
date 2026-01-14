#!/bin/sh
set -e

# Install dependencies if vendor directory doesn't exist or is empty
if [ ! -d "vendor" ] || [ -z "$(ls -A vendor)" ]; then
    echo "Installing Composer dependencies..."
    composer install --no-interaction --optimize-autoloader --no-scripts
fi

# Run composer scripts now that artisan is available
if [ -f "artisan" ]; then
    php artisan package:discover --ansi || true
fi

# Wait for RabbitMQ to be ready (if RABBITMQ_HOST is set)
if [ -n "$RABBITMQ_HOST" ]; then
    echo "Waiting for RabbitMQ to be ready..."
    RABBITMQ_PORT=${RABBITMQ_PORT:-5672}
    for i in $(seq 1 30); do
        if nc -z "$RABBITMQ_HOST" "$RABBITMQ_PORT" 2>/dev/null; then
            echo "RabbitMQ is ready!"
            break
        fi
        if [ $i -eq 30 ]; then
            echo "Warning: RabbitMQ not ready after 30 attempts, continuing anyway..."
        else
            echo "Waiting for RabbitMQ... ($i/30)"
            sleep 1
        fi
    done
fi

# Execute the main command
exec "$@"
