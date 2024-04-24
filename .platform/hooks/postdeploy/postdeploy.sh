#!/bin/bash

cd /var/www/html/ || { echo "Failed to change directory to /var/www/html/"; exit 1; }

artisan cache:clear
