#!/bin/sh
cd /var/www/html

echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev

echo "Setting directory permissions..."
chmod -R 777 storage bootstrap/cache

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Running db:seed..."
php artisan db:seed

echo "Running npm install..."
npm ci

echo "Running npm run build..."
npm run build

echo "Running php artisan serve --host 0.0.0.0..."
php artisan serve --host 0.0.0.0

echo "Deployment complete!"
