#!/bin/bash

cd /var/www/html/ || { echo "Failed to change directory to /var/www/html/"; exit 1; }

php artisan cache:clear
php artisan config:cache
php artisan view:cache
php artisan route:cache
