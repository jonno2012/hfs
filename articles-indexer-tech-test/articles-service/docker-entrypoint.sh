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

# Execute the main command
exec "$@"
